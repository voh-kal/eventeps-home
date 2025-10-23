<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function register_view()
    {
        $registration = Registration::all();
        return view('admin.index',compact('registration'));
    }
    //
    public function anoda()
    {
      
        return view('home.another');
    }
    //
}
