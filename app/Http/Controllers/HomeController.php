<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        if(session('nome')) {
            return view('index',['temp' => 'templateLogin']);
        } else {
            return view('index',['temp' => 'template']);
        }
    }
}
