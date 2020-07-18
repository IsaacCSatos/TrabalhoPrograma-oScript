@extends('template')
@section('titulo','Cadastro')
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
                <h1>Cadastro</h1>
                <form action="{{route('cadastra')}}"  method="post" enctype="multipart/form-data">
                    @csrf   
                    @if($errors->any())
                    <strong>Erro!</strong>
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                    @endif
                    <div id="esquerda">
                        <label for="nome">Nome </label><br>
                        <input type="text" name="nome" id="nome" placeholder="Digite o nome" required maxlength="15"><br><br>
                        
                        <label for="sobreNome">Sobre Nome </label><br>
                        <input type="text" name="sobreNome" id="sobreNome" placeholder="Digite o sobre nome" required maxlength="15"><br><br>
                        
                        <label for="telefone">Telefone </label><br>
                        <input type="text" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" required maxlength="15"><br><br>

                        <label for="nome">Login </label><br>
                        <input type="text" name="login" id="login" placeholder="Digite login" required maxlength="15"><br><br>
                        
                        <label for="foto">Selecione uma foto para perfil:</label>
                        <input type="file" id="foto" name="foto"><br><br>
                    </div>
                    
                    <div id="direita">
                        <label for="email">E-mail </label><br>
                        <input type="email" name="email" id="email" placeholder="endereco@email.com" required maxlength="30"><br><br>
                        
                        <label for="cpf">CPF </label><br>
                        <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" required maxlength="14"><br><br>

                        <label for="data">Data de nascimento</label><br>
                        <input type="date" name="data" id="data" required maxlength="15"><br><br>
                        
                        <label for="senha">Senha </label><br>
                        <input type="password" name="senha" id="senha" placeholder="Criar senha" required maxlength="15"><br>
                        
                        <label for="confsenha">Confirmar Senha</label><br>
                        <input type="password" name="confsenha" id="confsenha" placeholder="Confirmar senha" required maxlength="15"><br>
                        
                    </div>

                    
                    <div id="clear">
                        <input type="submit" value="Cadastrar" onclick="return cs()">
                    </div>
                </form>        
        </section>
@endsection
