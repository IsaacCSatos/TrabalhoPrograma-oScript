<html>
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type"text/css" href="{{asset('/css/meu_css.css')}}">
        <link rel="stylesheet" type"text/css" href="{{asset('/css/gallery.thema.css')}}">
        <link rel="stylesheet" type"text/css" href="{{asset('/css/gallery.min.css')}}">
    </head>
    <body>
        <header id="cabecalho">
            <ul>
                <li style="float:left">Robo Garçom</li>
                <li><a href="{{route('logout')}}">Logout</a></li></li>
                <li><a href="{{route('perfil')}}"> {{session('nome')}}</a></li></li>
                <li><a href="{{route('pedido')}}">Pedido</a></li></li>
            </ul>

        </header>
        <!-- INICIO TEMPLATE-->
            @yield('conteudo')
        <!-- FIM TEMPLATE-->
    </body>
    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
    </script>
    <script>
        (function () {
            window.onload = function () {
                new BlipChat()
                .withAppKey('cmVnOmYzNzZmM2ZhLTRmOTAtNGU5OC04YjM1LTUxMmRlZjdmZjUwYg==')
                .withButton({"color":"#2CC3D5","icon":""})
                .withCustomCommonUrl('https://chat.blip.ai/')
                .build();
            }
        })();
    </script>                              
</html>