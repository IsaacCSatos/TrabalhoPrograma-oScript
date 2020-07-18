<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    //
    public function cadastro(){
        return view('cadastro');
    }
    public function cadastra(Request $r){
        $r->validate([
		    'nome' 		=> 'required',
		    'sobreNome'	=> 'required',
		    'telefone'	=> 'required|integer',
		   	'login'		=> 'required',
		   	'email'		=> 'required|email',
		   	'cpf'		=> 'required|integer',
		    'data'		=> 'required',
		    'senha'		=> 'required',
			'confsenha'	=> 'required|same:senha',
			'foto'		=> 'image|mimes:jpeg,png,jpg,gif',
		]);
		$r['senha']= md5($r['senha']);
		Usuario::create($r->except('_token','confsenha'));
		return redirect()->route('home');
	}
	public function cadastrado(){
		return redirect()->back();
	}
}
