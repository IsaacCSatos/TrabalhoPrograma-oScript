<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class CardapioController extends Controller
{
    //
    public function cardapio(){
        $dados['produtos'] = Produto::all();
        if(session('nome')) {
            return view('cardapio',$dados,['temp' => 'templateLogin']);
        } else {
            return view('cardapio',$dados,['temp' => 'template']);
        }
    }
}
