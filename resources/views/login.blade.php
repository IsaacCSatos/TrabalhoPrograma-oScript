@extends('template')
@section('titulo','Login')
@section('conteudo')
        <nav id="menu">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="cardapio">Cardapio</a></li>
                <li><a href="promocao">Promoção</a></li>
            </ul>
        </nav>
        <section id="conteudo_principal">
            <div class="container">
                <h1>Login</h1>

                <form action="{{route('logar')}}"  method="post">
                    @csrf
                    <div id="esquerda">
                        <label for="login">Login </label><br>
                        <input type="text" name="login" id="login" placeholder="Digite login"><br><br>
                    </div>
                    
                    <div id="direita">
                        <label for="senha">Senha </label><br>
                        <input type="password" name="senha" id="senha" placeholder="Criar senha"><br>
                    </div>
                    <div id="clear">
                        <button type="submit">Logar</button>
                    </div>
                    @if(session('erro'))
                    <div class="alerta">
                        <p><strong>!Erro </strong>{{session('erro')}}</p>
                    </div>
                @endif
                </form>
        </section>
@endsection