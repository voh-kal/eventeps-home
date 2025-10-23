<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{

    public function likePost($post)
    {
        if(Auth::user()){
            $user_id = Auth::user()->id;
        }else{
            $user_id =1;
        };

        $like = Like::create([
            'post_id' => $post,
            'user_id'=> $user_id
        ]);
        return back()->with(['like' => $like]);
    }
}
