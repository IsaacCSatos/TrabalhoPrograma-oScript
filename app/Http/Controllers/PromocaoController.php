<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromocaoController extends Controller
{
    //
    public function promocao(){
        if(session('nome')) {
            return view('promocao',['temp' => 'templateLogin']);
        } else {
            return view('promocao',['temp' => 'template']);
        }
        
    }
}
