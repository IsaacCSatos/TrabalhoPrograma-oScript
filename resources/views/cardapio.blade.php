@extends($temp)
@section('titulo','Home')
@section('conteudo')
<nav id="menu">
    <ul>
        <li><a  href="home">Home</a></li>
        <li><a class="active" href="cardapio">Cardapio</a></li>
        <li><a href="promocao">Promoção</a></li>
    </ul>
</nav>
<section id="conteudo_principal">
    <div class="conteiner2">
        @foreach ($produtos as $produto)
            <div class="celula">
                <div>
                    <img src="{{asset($produto['foto'])}}" class="imagen">
                </div>
                <div class="titulo">
                    <h1>{{$produto['nome']}} R$ {{$produto['valor']}}</h1>
                </div>
                <div class="descricao">
                    <br>
                    <p>{{$produto['descricao']}}</p>
                </div>
                <div>
                    <br>
                    <p><a href="{{route('adicionarPedido',['id' => $produto['id']])}}" class="valor">Adicionar ao pedido</a></p>
                </div>
            </div>
         @endforeach
    </div>

</section>
@endsection