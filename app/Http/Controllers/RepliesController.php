<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function store($request)
    {
         $reply = Reply::create([
            'reply' => $request->reply,
            'user_id' => $request->user_id,
            'comment_id' => $request->comment_id
        ]);

        return back()->with('reply', $reply);
    }
}
