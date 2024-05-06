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
        <!-- Container para envolver a navegação da página -->
        <div class="container">
            <!-- Navegação da página -->
            <nav aria-label="Page navigation">
                <!-- Lista de paginação -->
                <ul class="pagination">
                    <!-- Link para a página anterior -->
                    <!-- Se estiver na primeira página, desativar o link -->
                    @if ($livros->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                        <!-- Caso contrário, criar link para a página anterior -->
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $livros->url($livros->currentPage() - 1) }}"
                                rel="prev">&laquo;</a>
                        </li>
                    @endif

                    <!-- Loop para criar links para cada página -->
                    @for ($page = 1; $page <= $livros->lastPage(); $page++)
                        <!-- Marcar a página atual com a classe 'active' -->
                        <li class="page-item{{ $page == $livros->currentPage() ? ' active' : '' }}">
                            <!-- Link para a página específica -->
                            <a class="page-link" href="{{ $livros->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    <!-- Link para a próxima página -->
                    <!-- Se não houver próxima página, desativar o link -->
                    @if ($livros->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $livros->url($livros->currentPage() + 1) }}"
                                rel="next">&raquo;</a>
                        </li>
                        <!-- Caso contrário, desativar o link -->
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>



    </div>
   
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>

</html>
