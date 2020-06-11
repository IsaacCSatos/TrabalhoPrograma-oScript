@extends('templateLogin')
@section('titulo','Logado')
@section('conteudo')
        <nav id="menu">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="cardapio">Cardapio</a></li>
                <li><a href="promocao">Promoção</a></li>
            </ul>
        </nav>
        <section id="conteudo_principal">
           <p>{{session('nome')}} Logado com sucesso</p>
        </section>
@endsection