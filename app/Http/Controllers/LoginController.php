<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function logar(Request $request){
        if($request->login == 'teste' && $request->senha == '123456'){
            return redirect()->route('logado');
        }else{
            return redirect()->back()->with('erro', 'Login ou Senha incorreta');
        }
    }
    public function logado(){
        return view('logado');
    }
}
