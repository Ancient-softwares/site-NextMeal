<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar page</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <h1>Página de registro</h1>
    <form method="POST" action="{{ route('registrar') }}">
        @csrf
        <label>Nome do restaurante: </label>
        <input type="text" name="nome">
        <br>

        <label>Telefone do restaurante: </label>
        <input type="text" name="telefone">
        <br>

        <label>cep do restaurante: </label>
        <input type="text" name="cep">
        <br>

        <label>Login do restaurante: </label>
        <input type="text" name="login">
        <br>

        <label>Senha: </label>
        <input type="password" name="senha">
        <br>

        <input type="submit" class="btn btn-success" value="Entrar">
        <br>
        <a href="{{ route('login') }}">Login</a>
    </form>
    
</body>
</html>