<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    //
    public function cadastro(){
        return view('cadastro');
    }
    public function cadastra(Request $r){
        $r->validate([
		    // 'nome' 		=> 'required',
		    // 'sobreNome'	=> 'required',
		    // 'telefone'	=> 'required|integer',
		   	// 'login'		=> 'required',
		   	// 'email'		=> 'required|email',
		   	// 'cpf'		=> 'required|integer',
		    // 'data'		=> 'required',
		    // 'senha'		=> 'required',
			// 'comfsenha'	=> 'required|same:senha',
			'foto'		=> 'required|image|mimes:jpeg,png,jpg,gif',

		]);
			// $image = $r->file('foto');
			// $novo_nome = rand() . '.' . $image->getClientOriginalExtension();
			// $image->move(public_path("images"),$novo_nome);
			$novo_nome = 'teste2.' . $r->foto->extension();
			$r->foto->storeAs('public/fotos', $novo_nome);

			return redirect()->route('cadastrado')->with('path',$novo_nome)
			->with($r->except('foto'));
			// ->with('nome',$r->nome)
			// ->with('sobreNome',$r->sobreNome)
			// ->with('telefone',$r->telefone)
			// ->with('login',$r->login)
			// ->with('email',$r->email)
			// ->with('cpf',$r->cpf)
			// ->with('data',$r->data);
	}
	public function cadastrado(){
		return view('perfil');
	}
}
