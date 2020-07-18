<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function logar(Request $request){
        $request->validate([
            'login' => 'required',
            'senha' => 'required'
        ]);

        $user = Usuario::where('login', $request->login)->where('senha', md5($request->senha))->first();

        if($user){
            session (['nome' => $user->nome]);
            return redirect()->route('logado');
        }else{
            return redirect()->back()->with('erro', 'Login ou Senha incorreta');
        }
    }
    public function logado(){
        return view('logado');
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('login');
    }
}
