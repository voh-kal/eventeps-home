<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */


    public function build()
    {

        $name = 'Eventeps Demo';
        $address = 'no-reply@eventeps.com';
        $subject = 'Schedule a Demo Notification';


        // dd($this->data);
        return $this->view('home.email')
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
          	->bcc(['revolutionize@eventeps.com','power@eventeps.com','sales@eventeps.com','hello@wowconnect.com.ng'])
            ->with([
                'email' => $this->data['email'],
                'name' => $this->data['name'],
                'number' => $this->data['number'],
                'industry' => $this->data['industry'],
                'region' => $this->data['region'],
                'event_agency' => $this->data['event_agency'],
                'event_size' => $this->data['event_size'],
                'add_info' => $this->data['add_info'],
              
            ]);
    }
}
