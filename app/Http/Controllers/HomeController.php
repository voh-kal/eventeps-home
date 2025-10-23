<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function tribearcSendMail($sub, $subject, $content, $bcc)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://mail.tribearc.com/api/campaigns/send_now.php');
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); //
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); //
        curl_setopt($curl, CURLOPT_POSTFIELDS, array(
            'api_key' => 'twiD47X8BHMOKb0BR2E3uk8ZNeh9u9',
            'from_name' => $subject,
            'from_email' => 'wegotyou@eventeps.com',
            'reply_to' => 'wegotyou@eventeps.com',
            'subject' => $sub,
            'html_text' => $content,
            'bcc' => $bcc,
            'track_opens' => '1',
            'track_clicks' => '1',
            'send_campaign' => '1',
            'json' => '1',
            'emails' => $bcc,
            'business_address' => "Lagos, Nigeria",
            'business_name' => 'Eventeps',
            'editor_type' => 'editor'
        ));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Api-Token:' . 'twiD47X8BHMOKb0BR2E3uk8ZNeh9u9'));

        $response = curl_exec($curl);
        $res = $response;
        curl_close($curl);
        return $res;
    }
    public function home(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'number' => 'required',
                'industry' => 'required',
                'region' => 'required',
                'event_agency' => 'required',
                'event_size' => 'required',
            ]);
            $name = $request->lname . ' ' . $request->fname;
            $words = explode(' ', $name);

            foreach ($words as $word) {
                // Count capitals in the word
                $capitals = preg_match_all('/[A-Z]/', $word);

                // If more than one capital, throw an exception
                if ($capitals > 1) {
                    return back()->with('error', 'An error occurred');
                }
            }
            $content = $request->input('additional_info');
            $hasTag = preg_match('/<[^>]*>/', $content) === 1;

            $number = $request->number;
            $startsWithZero = str_starts_with($number, '0');
            $length = strlen($number);
            $isValid = false;

            if ($startsWithZero && $length === 11) {
                $isValid = true;
            } elseif (!$startsWithZero && $length === 10) {
                $isValid = true;
            }

            if (isset($request->middleName) || $hasTag || !$isValid) {
                return back()->with('error', 'An error occurred, Check your inputs and try again');
            }
            $email = Registration::where(['email' => $request->email])->count();

            if ($email > 0) {
                return back()->with('error', 'Email already registered');
            }

            if ($request->check !== 'Yes') {
                $request->check === 'No';
            }
            $registration = Registration::create($request->all());
            $data = [
                'name' => $request->lname . ' ' . $request->fname,
                'email' => $request->email,
                'number' => $request->number,
                'industry' => $request->industry,
                'region' => $request->region,
                'event_agency' => $request->event_agency,
                'event_size' => $request->event_size,
                'add_info' => $request->additional_info ?? 'No additional information',
            ];


            $html = view('email.schedule', compact(
                'data'
            ))->render();
            $bcc = 'larylivlynnxe@gmail.com, oo.abisola@gmail.com';
            $email = trim(strtolower($request->email));
            $sub = 'Schedule a Demo';
            $subject = 'Eventeps';

            // Mail::to(trim(strtolower($request->email)))->bcc(['revolutionize@eventeps.com', 'power@eventeps.com', 'sales@eventeps.com', 'hello@wowconnect.com.ng'])->send(new sendMail($data));
            $sendMail = $this->tribearcSendMail($sub, $subject, $html, urldecode($email), $bcc);

            if ($sendMail !== 'Message sent!') {
                return back()->with('error', 'An Error occurred');
            } else {
                return back()->with('success', 'Thank you for reaching out');
            }
        }
        //,

        $resources = Resource::take(4)->get();

        return view('home', compact('resources'));
    }

    public function features()
    {
        return view('features');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            // Validate form data
            $validated = $request->validate([
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'preferred_contact' => 'nullable|string|in:both_phone_mail,phone,email',
                'email' => 'required_if:preferred_contact,both_phone_mail,email|email|nullable',
                'phone_number' => 'required_if:preferred_contact,both_phone_mail,phone|nullable',
                'organizer_name' => 'required|string|max:255',
                'event_name' => 'required|string|max:255',
                'description' => 'required|string',
                'mode_of_event' => 'required|string|in:hybrid,physical,virtual',
                'venue' => 'required_if:mode_of_event,hybrid,physical|nullable',
                'start_date' => 'required|date',
                'start_time' => 'required',
                'end_time' => 'required',
                'event_size' => 'required|string',
                'service_option' => 'required|string',
                'payment_option' => 'required|string',
                'event_type' => 'required|string',
                'event_features' => 'nullable',
                'other_features' => 'nullable',
                'tickets' => 'nullable|string',
                'website' => 'nullable|string|max:255',
                'question' => 'nullable|string|max:255',
                'attendee_list' => 'required|string|in:yes,no',
            ]);

            // Generate a unique reference ID and add to validated data
            $reference_id = 'EV-' . date('Ymd') . '-' . strtoupper(Str::random(6));
            $validated['reference_id'] = $reference_id;

            // Process event features if present
            if ($request->has('event_features')) {
                $eventFeatures = json_decode($request->input('event_features'), true);
                if (is_array($eventFeatures)) {
                    $validated['event_features'] = implode(',', $eventFeatures);
                }
            }

            // Map the field names to match database columns
            $data = [
                'fname' => $validated['fname'],
                'lname' => $validated['lname'],
                'email' => $validated['email'] ?? null,
                'number' => $validated['phone_number'] ?? null,
                'industry' => $validated['organizer_name'],
                'event_agency' => $validated['event_name'],
                'description' => $validated['description'],
                'mode_of_event' => $validated['mode_of_event'],
                'venue' => $validated['venue'] ?? null,
                'start_date' => $validated['start_date'],
                'start_time' => $validated['start_time'],
                'end_time' => $validated['end_time'],
                'event_size' => $validated['event_size'],
                'service_option' => $validated['service_option'],
                'payment_option' => $validated['payment_option'],
                'event_type' => $validated['event_type'],
                'event_features' => $validated['event_features'] ?? null,
                'other_features' => $validated['other_features'] ?? null,
                'tickets' => $validated['tickets'] ?? null,
                'website' => $validated['website'] ?? null,
                'attendee_list' => $validated['attendee_list'],
                'addidtional_info' => $validated['question'] ?? null,
                'reference_id' => $reference_id,
            ];

            // Create the registration with explicitly defined fields
            $eventRegistration = Registration::create($data);

            DB::commit();

            $html = view('email.schedule', compact(
                'data'
            ))->render();

            $bcc = 'wegotyou@eventeps.com';
            $email = trim(strtolower($request->email));
            $sub = 'Schedule a Demo';
            $subject = 'Eventeps';

            $sendMail = $this->tribearcSendMail($sub, $subject, $html, $bcc);

            return response()->json([
                'success' => true,
                'message' => 'Event Form submitted successfully',
                'reference_id' => $reference_id,
                'data' => $eventRegistration
            ], 201);
        } catch (ValidationException $e) {
            DB::rollBack();
            // Return JSON for validation errors
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            // Log the error for debugging
            Log::error('Event registration error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function use_cases()
    {
        $resources = Resource::take(4)->get();

        return view('use_cases', compact('resources'));
    }

    public function resources()
    {
        $get_all = Resource::where('is_pinned', false)->orderBy('id', 'desc')->get();
        $getPinned = Resource::where('is_pinned', true)->first();
        $count = Resource::count();
        return view('resources', compact('get_all', 'count', 'getPinned'));
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function about()
    {
        return view('about');
    }

    public function welcome()
    {
        return view('question');
    }


    public function single_blog(Request $request, $id)
    {
        $n_id = base64_decode($id);
        $all = Resource::where(['id' => $n_id])->with('comments')->first();
        $user = User::where(['id' => $all->user_id])->first();
        return view('single', compact('all', 'user'));
    }

}
