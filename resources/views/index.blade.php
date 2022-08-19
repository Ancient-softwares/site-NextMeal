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
    <link href="{{ URL::asset('css/sidebar.css') }}" rel="stylesheet" type="text/css">

    <title>Index</title>
</head>

<body>
    <nav>
        <div class="navbar-sidebar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="logo">
                    <img src="{{ URL::asset('img/NextMeal.png') }}" alt="">
                </div>
                <div class="menu-items">

                    <h1>Restaurante: {{ $login }}</h1>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Cardápio</a></li>
                    <li><a href="{{ route('crud-mesa.index') }}">Mesas</a></li>
                    <li><a href="#">Reservas</a></li>
                    <li><a href="#">Avaliações</a></li>
                    <li><a href="{{ route('logout') }}">Sair</a></li>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <!--BACK-END
            <h1>Restaurante: {{ $login }}</h1>
            <a href="{{ url('home') }}">Cadastrar restaurante</a><br>
            <a href="{{ route('crud-mesa.index') }}">Cadastrar mesa</a><br>
            <a>ADM</a><br>
            <a href="{{ route('logout') }}">Log-out</a>-->

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
    </div>


</body>

</html>