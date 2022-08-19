<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do perfil</title>
</head>

<body>
    Pagina doidera do roque

    <br>
    {{ $info->fotoRestaurante }}
    <img src="{{ asset($info->fotoRestaurante) }}">
    <br>
    {{ $info->nomeRestaurante }}
    <br>
    {{ $info->nomeRestaurante }}
    <br>
    {{ $info->nomeRestaurante }}
    <br>
    {{ $info->nomeRestaurante }}

    <br><br><br><br>
    Adicionar fotoRestaurante
    <form method="POST" action="{{ route('perfil-page-image') }}">
        @csrf
        <input type="file" name="foto">
        <input type="submit" value="Vai logo">
    </form>
</body>

</html>