@extends($temp)
@section('titulo','Pedido')
@section('conteudo')

       <nav id="menu">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="cardapio">Cardapio</a></li>
                <li><a href="promocao">Promoção</a></li>
            </ul>
        </nav>

        <section id="conteudo_principal">
            
                @foreach ($vetorP as $produto)
                    <div>
                        <div class="titulo">
                            {{$produto['nome']}} R$ {{$produto['valor']}} Quantidade remover
                        </div>
                    </div>
                        @endif
                    @endforeach
                @endforeach
                @foreach (Session::get('idProdutos') as $produto_id)
                {{$produto_id}}
                @endforeach
                Valor Total: R$
                Finalizar Pedido
        </section>
@endsection
