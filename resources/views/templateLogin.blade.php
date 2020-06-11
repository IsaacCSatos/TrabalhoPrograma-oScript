<html>
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type"text/css" href="{{asset('/css/meu_css.css')}}">
    </head>
    <body>
        <header id="cabecalho">
            <ul>
                <li style="float:left">Robo Garçom</li>
                <li><a href="{{route('logout')}}">Logout</a></li></li>
                <li><a href="{{route('login')}}"> {{session('nome')}}</a></li></li>
            </ul>

        </header>
        <!-- INICIO TEMPLATE-->
            @yield('conteudo')
        <!-- FIM TEMPLATE-->
    </body>
</html>