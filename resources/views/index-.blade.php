<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./IMG/logo.png">

  <!-- Css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="./assets/CSS/utsukushi.css">
  <link rel="stylesheet" href="./assets/CSS/footerDeDoido.css">
  <link rel="stylesheet" href="./assets/CSS/Responsive.css">

  <title>Next Meal</title>
  <link rel="icon" href="./assets/IMG/iconNM.png">

</head>

<body>
  <!--NavBar-->
  <header>
    <div class="container">
      <img src="./assets/IMG/NextMeal.png" alt="Rocketseat" />
      <div class="menu-section">
        <div class="menu-toggle">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>
        <nav>
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#E">Aplicativo</a>
            </li>
            <li>
              <a id="myBtn" href="#Login">Login</a>
            </li>
            <li>
              <a href="#Contato">Contato</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Login</h2>
      <div class="corpin">
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
          {{ $errors->first() }}
        </div>
        @endif
        <form method="POST" action="{{ route('autenticar') }}">
          <input type="text" placeholder="Insira o Usuário" name="login" required>
          <input type="password" placeholder="Insira a Senha" name="senha" required>

          <div class="corpin-baixo">
            <a href="#">Esqueci a Senha</a>
            <input type="submit" class="btn btn-success" value="Entrar">
            <a href="{{ route('registro') }}">Registrar-se</a>
          </div>

          <!--
            @if($errors->any())
        <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
        </div>
    @endif


    <form method="POST" action="{{ route('autenticar') }}">
        @csrf
        <label>Login: </label>
        <input type="text" name="login">
        <br>

        <label>Senha: </label>
        <input type="password" name="senha">
        <br>

        <input type="submit" class="btn btn-success" value="Entrar">
        <br>
        <a href="{{ route('registro') }}">Registrar-se</a>
    </form>
          -->
        </form>
      </div>
    </div>
  </div>
  <img class="back" src="./assets/IMG/beck.png">
  <!--NavBar-->
  <main>

    <section class="hero">
      <div class="container">
        <div class="Info">
          <h2>Next Meal</h2>
          <p>O Next Meal é uma solução web e mobile para reduzir as filas de restaurantes,
            ajudando mais de 10mil babacas desinformados por dia.</p>
        </div>
        <img class="image" src="./assets/IMG/logoNext.png" />
      </div>
      </div>
    </section>

    <div class="Vantagens">
      <h2>Vantagens</h2>
      <div class="container">
        <div class="boxV">
          <h3>Esteja à frente da concorrência.</h3>
          <p>Info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
          </p>
        </div>
        <div class="boxV">
          <h3>Melhorar a logística do seu negócio.</h3>
          <p>Info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
          </p>
        </div>
        <div class="boxV">
          <h3>Experiência que gera fidelidade do cliente.</h3>
          <p>Info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
          </p>
        </div>
        <div class="boxV">
          <h3>VANTAGEN 03 é coisa muito boa.</h3>
          <p>Info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
            info info info info info info info info info info
          </p>
        </div>
      </div>
      <div class="bottonV">
        <div class="letsGo">
          <a href="#"> Vamos lá?</a>
        </div>
      </div>
    </div>

    <div class="Download" id="Download">
      <div class="container">
        <img class="boxIMG" src="./assets/IMG/dwon.png">
        <div class="box">
          <h2>Download</h2>
          <div class="iOSAndroid">
            <button class="Android">
              <a href="#"><img src="./assets/IMG/and.png"></a>
              <h5 class="card-title">Play Store</h5>
            </button>
            <button class="iOS">
              <a href="#"><img src="./assets/IMG/ios.png"></a>
              <h5 class="card-title">App Store</h5>
            </button>
          </div>
        </div>
      </div>
    </div>

  </main>


  <footer>
    <section class="footer">
      <div class="Contato" id="Contato">
        <div class="footer-header">
          <h2>Redes sociais</h2>
          <ul class="rede">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
        <div class="footer-content">
          <h3>"Lazer Sem Filas"</h3>
          <p>@NextMeal</p>
        </div>
      </div>
    </section>
  </footer>

  <button id="topBtn"><i class="fas fa-arrow-up"></i></button>

  <script src="./assets/JS/hamburguer.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./assets/JS/Modal.js"></script>
  <script src="./assets/JS/back-top.js"></script>

</body>

</html>