@extends($temp)
@section('titulo','Home')
@section('conteudo')
       <nav id="menu">
            <ul>
                <li><a class="active" href="home">Home</a></li>
                <li><a href="cardapio">Cardapio</a></li>
                <li><a href="promocao">Promoção</a></li>
            </ul>
        </nav>
        <section id="conteudo_principal1">

            <div class="gallery autoplay items-3 box">

                <div id="item-1" class="control-operator"></div>
                <div id="item-2" class="control-operator"></div>
                <div id="item-3" class="control-operator"></div>
            
                <figure class="item img-teste">
                    <h1><img src="{{asset("imagens/FirecrackerShrimpNachos 1150x400.png")}}"></h1>
                </figure>

                <figure class="item img-teste">
                    <h1><img src="{{asset("imagens/Bloomin_Onion_cmyk 1150x400.png")}}"></h1>
                </figure>

                <figure class="item img-teste">
                    <h1><img src="{{asset("imagens/kookaburra_wings-1150x400.png")}}"></h1>
                </figure>
            
                <div class="controls">
                    <a href="#item-1" class="conrtol-button">.</a>
                    <a href="#item-2" class="conrtol-button">.</a>
                    <a href="#item-3" class="control-button">.</a>
                </div>

            </div> 
              
        </section>
@endsection