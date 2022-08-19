<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ URL::asset('css/sidebar.css') }}" rel="stylesheet" type="text/css">

    <title>Mesas</title>
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
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Cardápio</a></li>
                    <li><a href="{{ route('crud-mesa.index') }}">Mesas</a></li>
                    <li><a href="#">Reservas</a></li>
                    <li><a href="#">Avaliações</a></li>
                    <li><a href="{{ route('logout') }}">Sair</a></li>
                    <li><a href="{{ route('index') }}">Voltar</a></li>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Mesa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('crud-mesa.store') }}" method="POST">
                    <div class="modal-body">
                        @csrf

                        <label>Quantidade de acentos</label>
                        <div class="inputbox">
                            <input type="number" name="quantAcento" class="form-control">
                        </div>

                        <div class="inputbox">
                            <label>Status da mesa:</label>
                            <input class="form-check-input" name="status" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="0" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Fechada
                            </label>
                            <input class="form-check-input" name="status" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Aberta
                            </label>
                        </div>

                        <div class="inputbox">
                            <label>Numeração da mesa</label>
                            <input type="text" name="numMesa" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Quantidade de acentos</th>
                <th scope="col">Status da mesa</th>
                <th scope="col">Numeração da Mesa</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($mesas as $mesa)
            <tr>
                <th scope="row">{{ $mesa->idMesa }}</th>
                <td>{{ $mesa->quantAcento }}</td>
                <td>{{ $mesa->statusMesa == "0" ? "Fechada" : "Aberta" }}</td>
                <td>{{ $mesa->numMesa }}</td>
                <td>
                    <button type="button" class="btn btn-primary" value="{{ $mesa->idMesa }}" data-bs-toggle="modal" data-bs-target="#editar{{ $mesa->idMesa }}">Editar</button>
                    <button type="button" class="btn btn-danger" value="{{ $mesa->idMesa }}" data-bs-toggle="modal" data-bs-target="#excluir{{ $mesa->idMesa }}">Excluir</button>
                </td>

                <!-- DELETAR MODEL -->
                <form action="{{ route('crud-mesa.destroy', $mesa->idMesa) }}" method="post">
                    {{ method_field('delete') }}
                    @csrf

                    <div class="modal fade" id="excluir{{ $mesa->idMesa }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Deletar a mesa de ID {{ $mesa->idMesa }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Tem certeza que deseja deletar a mesa?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-danger">Deletar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- EDITAR MODEL -->
                <form action="{{ route('crud-mesa.update', $mesa->idMesa) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="modal fade" id="editar{{ $mesa->idMesa }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar a mesa de ID {{ $mesa->idMesa }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label>Quantidade de acentos</label>
                                    <div class="inputbox">
                                        <input type="number" name="quantAcento" class="form-control" value="{{ $mesa->quantAcento }}">
                                    </div>

                                    <div class="inputbox">
                                        <label>Status da mesa:</label>
                                        <input class="form-check-input" name="status" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="0" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Fechada
                                        </label>
                                        <input class="form-check-input" name="status" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="1" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Aberta
                                        </label>
                                    </div>

                                    <div class="inputbox">
                                        <label>Numeração da mesa</label>
                                        <input type="text" name="numMesa" class="form-control" value="{{ $mesa->numMesa }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-primary">Editar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cadastrar mesa
    </button>

</body>

</html>