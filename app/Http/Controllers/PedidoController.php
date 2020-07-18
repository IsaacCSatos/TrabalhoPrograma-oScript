<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class PedidoController extends Controller
{
    public function pedido(){
        $dados['produtos'] = Produto::all();

        foreach($dados as $produto){
            foreach(Session::get('idProdutos') as $produto_id){
                if ($produto_id == $produto['id']) {
                    array_push($vetorP, $dados);
                }
            }
        }
        
        if(session('nome')) {
            return view('pedido',$dados,['temp' => 'templateLogin']);
        } else {
            return view('pedido',$dados,['temp' => 'template']);
        }
    }
    public function adicionar($id){
        session()->push('idProdutos',$id);
        return redirect()->back();
    }
}
