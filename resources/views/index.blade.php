<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--CSS-->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <title>Index</title>
</head>
<body>
    <div class="container">
        <div class="toggler">
            <div class="botao">
                <div class="img-toggler">
                    <img src="{{ URL::asset('img/sidebar.png') }}" alt="">
                </div>
                <h1>INICIO</h1>
                <a class="button" href="{{ route('crud-mesa.index') }}"><p>Perfil</p></a><br>
                
                <a class="button" href="{{ route('crud-mesa.index') }}"><p>Cardapio</p></a><br>

                <a class="button" href="{{ route('crud-mesa.index') }}"><p>Mesas</p></a><br>
                
                <a class="button" href="{{ route('crud-mesa.index') }}"><p>Reservas</p></a><br>
                
                <a class="button" href="{{ route('crud-mesa.index') }}"><p>Avaliaçoes</p></a><br>
            </div>
            <!--BACK-END-->
            <h1>Restaurante: {{ $login }}</h1>
            <a href="{{ url('home') }}">Cadastrar restaurante</a><br>
            <a href="{{ route('crud-mesa.index') }}">Cadastrar mesa</a><br>
            <a>ADM</a><br>
            <a href="{{ route('logout') }}">Log-out</a> 
        </div>
        <div class="atualizacoes">

            <h1>Novidades</h1>

            <div class="card">
                <h2>titulo</h2>
                <h4>desc</h4>
            </div>
            <div class="card">
                <h2>titulo</h2>
                <h4>desc</h4>
            </div>
            <div class="card">
                <h2>titulo</h2>
                <h4>desc</h4>
            </div>
            <div class="card">
                <h2>titulo</h2>
                <h4>desc</h4>
            </div>
            <div class="card">
                <h2>titulo</h2>
                <h4>desc</h4>
            </div>
            <div class="card">
                <h2>titulo</h2>
                <h4>desc</h4>
            </div>
            <div class="card">
                <h2>titulo</h2>
                <h4>desc</h4>
            </div>
            <div class="card">
                <h2>titulo</h2>
                <h4>desc</h4>
            </div>
        </div>
        <div class="imagem">
            <img src="{{ URL::asset('img/restaurante.jpg') }}" alt="">
        </div>
        
    </div>

    
</body>
</html>