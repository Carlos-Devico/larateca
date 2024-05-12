<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/imgs/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/meuestilo.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- Cabeçalho de Navegação -->
    <nav class="navbar navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="/img/simb.png" alt="Logo da Lara Teca">
            Lara Teca
        </a>
        <!-- Container do campo de pesquisa -->
        <div class="search-container">
            <!-- Campo de texto -->
            <input type="text" class="search-input" placeholder="Pesquisar...">
            <!-- Ícone de pesquisa -->
            <i class="fas fa-search search-icon"></i>
        </div>
    </nav>

    <!-- Conteúdo da Página -->
    <div class="container-fluid">
        <div class="row">
            <!-- Menu de Operações (lado esquerdo) -->
            <div class="col-md-2 list-group text-light full-height">
                <h3 class="mt-3">Operações</h3>
                <ul class="list-group">
                    <a href="" class="list-group-item list-group-item-action">
                        <i class="fas fa-book"></i> Livros
                    </a>
                    <ul class="submenu list-group">
                        <li class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Criar Livro</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-pencil-alt"></i> Atualizar
                            Livro</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-trash-alt"></i> Excluir
                            Livro</li>
                        <!-- Adicione mais operações conforme necessário -->
                    </ul>

                    {{--  LEITORES  --}}

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i> Leitores
                    </a>
                    <ul class="submenu list-group">
                        <li class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i> Criar
                            Leitores</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-user-edit"></i> Atualizar
                            Leitores</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-user-times"></i> Excluir
                            Leitores</li>
                        <!-- Adicione mais operações conforme necessário -->
                    </ul>

                    {{--  EMPRESTIMOS  --}}

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-handshake"></i> Empréstimos
                    </a>
                    <ul class="submenu list-group">
                        <li class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Criar Empréstimos
                        </li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-sync-alt"></i> Atualizar
                            Empréstimos</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-trash-alt"></i> Excluir
                            Empréstimos</li>
                        <!-- Adicione mais operações conforme necessário -->
                    </ul>


                    {{--  AUTORES  --}}

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-user"></i> Autores
                    </a>
                    <ul class="submenu list-group">
                        <li class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Criar Autores
                        </li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-sync-alt"></i> Atualizar
                            Autores</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-trash-alt"></i> Excluir
                            Autores</li>
                        <!-- Adicione mais operações conforme necessário -->
                    </ul>


                    <!-- Adicione mais operações conforme necessário -->
                </ul>
            </div>

            <!-- Conteúdo Principal (lado direito) -->
            <div class=" col-md-10 mt-3">
                <div class="container">
                    <h2>Indicadores</h2>
                    <!-- Conteúdo do Dashboard -->
                    <div class="row">
                        <!-- Card de Leitores -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/img/reader.png" class="card-img-top" alt="Imagem de Leitores">
                                    <h5 class="card-title">Total de Leitores</h5>
                                    {{ App\Models\Leitor::count() }}
                                </div>
                            </div>
                        </div>
                    
                        <!-- Card de Livros -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/img/books.png" class="card-img-top" alt="Imagem de Leitores">
                                    <h5 class="card-title">Total de Livros</h5>
                                    <p class="card-text">
                                        {{ App\Models\Livro::count() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Card de Empréstimos -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/img/planning.png" class="card-img-top" alt="Imagem de Leitores">
                                    <h5 class="card-title">Empréstimos Ativos</h5>
                                    {{ App\Models\Emprestimo::count() }}
                                </div>
                            </div>
                        </div>
                    
                        <!-- Card de Livros Disponíveis -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/img/available.png" class="card-img-top" alt="Imagem de Leitores">
                                    <h5 class="card-title">Livros Disponíveis</h5>
                                    {{ App\Models\Livro::count() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    {{--  DISPALY CRUD  --}}
                    {{--  diretiva @section é usada para definir o conteúdo de uma seção  --}}
                    <div class="container">
                        <h1 class="mt-5">Lista de Livros</h1>
                        <!-- Conteúdo da seção 'content' -->
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer">
        <div class="container">
            <span>Desenvolvido por Carlos Vieira &copy; 2024</span>
        </div>
    </footer>

    <!-- Bootstrap JS (opcional, se necessário) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Seleciona todos os itens de menu com submenu
        const menuItems = document.querySelectorAll('.list-group-item');

        // Adiciona um ouvinte de evento para cada item de menu
        menuItems.forEach(item => {
            // Verifica se o item de menu possui submenu
            const submenu = item.nextElementSibling;
            if (submenu && submenu.classList.contains('submenu')) {
                // Adiciona um ouvinte de evento para o evento mouseenter (quando o mouse entra no item de menu)
                item.addEventListener('mouseenter', () => {
                    // Adiciona uma classe ao item de menu para aplicar o estilo da linha vermelha
                    item.classList.add('submenu-hover');
                });

                // Adiciona um ouvinte de evento para o evento mouseleave (quando o mouse deixa o item de menu)
                submenu.addEventListener('mouseleave', () => {
                    // Remove a classe do item de menu quando o mouse sai do submenu
                    item.classList.remove('submenu-hover');
                });
            }
        });
    </script>
</body>

</html>
