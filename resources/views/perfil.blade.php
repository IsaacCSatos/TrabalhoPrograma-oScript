@extends('template')
@section('titulo','Home')
@section('conteudo')
       <nav id="menu">
            <ul>
                <li><a class="active" href="home">Home</a></li>
                <li><a href="cardapio">Cardapio</a></li>
                <li><a href="promocao">Promoção</a></li>
            </ul>
        </nav>
        <section id="conteudo_principal">
            <br/><img src="/images/{{ Session::get('path') }}">
            <br/>Cadastro Efetuado com sucesso
            <br/>Nome: {{ Session::get('nome')}}
            <br/>Sobre Nome: {{ Session::get('sobreNome)')}}
            <br/>Telefone: {{ Session::get('telefone')}}
            <br/>Login: {{ Session::get('login')}}
            <br/>Email: {{ Session::get('email')}}
            <br/>cpf: {{ Session::get('cpf')}}
            <br/>Data: {{ Session::get('data')}}
        </section>
@endsection
