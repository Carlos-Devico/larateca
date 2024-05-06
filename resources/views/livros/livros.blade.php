<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Lista de Livros</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>ISBN</th>
                    <th>Gênero</th>
                    <th>Páginas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->isbn }}</td>
                        <td>{{ $livro->genero }}</td>
                        <td>{{ $livro->paginas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer">
            {{ $livros->links('vendor.pagination.simple-bootstrap-4') }}

        </div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>
