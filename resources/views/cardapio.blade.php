@extends('template')
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

        <div class="celula">
            <div class="imagen">
                <img src="imagens/FirecrackerShrimpNachos 225x255.png">
            </div>
            <div class="titulo">
                <h1>Firecracker Shrimp Nachos</h1>
            </div>
            <div class="descricao">
                <p>Descriçaõ</p>
                <p>Deliciosos camarões empanados e temperados com nosso molho Firecracker. Servidos com saborosas tortillas crocantes.</p>
            </div>
            <div class="valor">
                <p>Valor: R$61,50</p>
            </div>
        </div>

        <div class="celula">
            <div class="imagen">
                <img src="imagens/Bloomin_Onion_cmyk 225x253.png">
            </div>
            <div class="titulo">
                <h1>Bloomin’ Onion</h1>
            </div>
            <div class="descricao">
                <p>Descriçaõ</p>
                <p>Nossa famosa cebola gigante e dourada com o autêntico sabor do Outback. Acompanha nosso maravilhoso molho Bloom.</p>
            </div>
            <div class="valor">
                <p>Valor: R$49,90</p>
            </div>
                
        </div>

        <div class="celula">
            <div class="imagen">
                <img src="imagens/Outback-Fries_305x342-225x255.png">
            </div>
            <div class="titulo">
                <h1>Aussie Cheese Fries</h1>
            </div>
            <div class="descricao">
                <p>Descriçaõ</p>
                <p>Nossas fritas com uma cobertura irresistível com mix de queijos e bacon. O toque final fica por conta do molho Ranch. Transforme sua batata em veggie pedindo sem bacon.</p>
            </div>
            <div class="valor">
                <p>Valor: R$55,50</p>
            </div>
            
        </div>

        <div class="celula">
            <div class="imagen">
                <img src="imagens/kookaburra_wings-225x255.jpg">
            </div>
            <div class="titulo">
                <h1>Kookaburra Wings</h1>
            </div>
            <div class="descricao">
                <p>Descriçaõ</p>
        <p>10 sobreasas de frango empanadas com um blend de temperos à sua escolha: light, medium ou hot. Servidas com molho tipo Blue Cheese e aipo crocante.</p>
            </div>
            <div class="valor">
                <p>Valor: R$55,50</p>
            </div>
            
        </div>
        
    </div>

</section>
@endsection