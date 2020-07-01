<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function daftar(){
        return view('daftar');
    }

    public function home(Request $request){
        $fname = $request['fname'];
        $lname = $request['lname'];

        return view('home', compact('fname', 'lname'));
    }
    
}
