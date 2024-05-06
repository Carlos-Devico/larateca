<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraTeca</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#7b4594">
    <meta name="msapplication-TileColor" content="#7b4594">
    <meta name="theme-color" content="#7b4594">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <style>
        /* Estilo personalizado */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #933EFF 5%, #770fbd 56%, #582599 100%);
            /* Cor de fundo do corpo */
            color: #dc1d30;
            /* Cor do texto */
        }

        
        .navbar-brand img {
            max-width: 45px;
            vertical-align: middle;
        }
        
        
        {{--  NAVBAR AQUI  --}}
        /* Estilos da barra de navegação */
        .navbar {
            background: linear-gradient(to bottom right, #240947, #371b5c);
            padding: 10px;
        }

        /* Estilos do campo de pesquisa */
        .search-container {
            float: right;
        }

        /* Estilos do campo de texto */
        .search-input {
            padding: 8px;
            margin-top: 8px;
            border: none;
            border-radius: 5px;
        }

        /* Estilos do ícone de pesquisa */
        .search-icon {
           
            margin-top: 20px;
            margin-right: 16px;
            margin-left: 16px;
            color: rgb(190, 31, 31);
        }

        /* Estilo do ícone de pesquisa quando hover */
        .search-icon:hover {
            color: #d85f0e;
            /* Altere a cor conforme necessário */
            cursor: pointer;
        }

        .list-group {
            background: linear-gradient(to bottom right, #933EFF 5%, #5f3a8b 56%, #461587 100%);
            /* Altera a cor do navbar */
            padding-left: 10px;
        }

        @font-face {
            font-family: 'Beasley';
            src: url('/fonts/beasley.ttf') format('truetype');
        }

        .navbar-brand {
            font-family: 'Beasley', sans-serif;
            font-size: 2rem;
            color: #dc1d30;
            /* Cor do texto */
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: linear-gradient(to bottom right, #240947, #371b5c);
            color: #dc1d30;
            text-align: center;
            padding: 10px 0;
        }

        .full-height {
            height: 100vh;
        }

        .submenu {
            display: none;
            /* Inicialmente oculta o submenu */
            transition: all 0.3s ease;
        }

        .list-group-item:hover+.submenu,
        .submenu:hover {
            display: block;
            /* Mostra o submenu quando o item principal for hover ou quando o submenu for hover */
        }

        /* Transição suave para o submenu */
        .submenu {
            transition: all 0.3s ease;
        }

        /* criar o brilho ao passar o mouse */
        .list-group-item:hover {
            background-color: #9a80f9;
            /* Altere a cor conforme necessário */
            transition: background-color 0.3s ease;
        }

        /* criar efeito de tremor ao ser selecionado */
        .list-group-item:active {
            animation: shake 0.5s;
            /* Utiliza a animação "shake" */
        }

        /* --- Criar o tremor --- */
        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }

            100% {
                transform: translateX(0);
            }
        }

        /* set geral para os cards */
        .card {
            margin-bottom: 20px;
            height: 120px;
            position: relative;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);

        }

        /* Estilo para o conteúdo dos cards */
        .card-body {
            color: white;
            text-align: center;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            /* Adiciona sombra ao texto */
        }

        .card-title {
            font-size: 1.2rem;
        }

        .card-text {
            font-size: 1rem;
        }

        /* Estilos para os cards gradientes */
        .gradient-1 {
            background: linear-gradient(45deg, #386666, #5e9596);


            background: linear-gradient(45deg, #95ff00, #5e9596);
            ;
            /* Gradiente 1 */
        }

        .gradient-2 {
            background: linear-gradient(45deg, #dc1d30, #161e23);
            /* Gradiente 2 */
        }

        .gradient-3 {
            background: linear-gradient(45deg, #FFDAD9, #5D3F3F);
            /* Gradiente 3 */
        }

        .gradient-4 {
            background: linear-gradient(45deg, #dc1d30, #ff6347);
            /* Gradiente 4 */
        }

        /* Estilo da linha vermelha na lateral esquerda do menu quando o mouse estiver sobre um item do submenu */
        .list-group-item.submenu-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 10px;
            /* Largura da linha */
            background-color: #95ff00;
            /* Cor da linha vermelha */
        }
    </style>
</head>

<body>
    <!-- Cabeçalho de Navegação -->
    <nav class="navbar navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="img/simb.png" alt="Logo da Lara Teca">
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
            <div class="col-md-3 list-group text-light full-height">
                <h3 class="mt-3">Operações</h3>
                <ul class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
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
            <div class="col-md-9 mt-3">
                <div class="container">
                    <h2>Dashboard</h2>
                    <!-- Conteúdo do Dashboard -->
                    <div class="row">
                        <!-- Card de Leitores -->
                        <div class="col-md-3">
                            <div class="card gradient-1">
                                <div class="card-body">
                                    <h5 class="card-title">Total de Leitores</h5>
                                    <p class="card-text">100</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card de Livros -->
                        <div class="col-md-3">
                            <div class="card gradient-2">
                                <div class="card-body">
                                    <h5 class="card-title">Total de Livros</h5>
                                    <p class="card-text">500</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card de Empréstimos -->
                        <div class="col-md-3">
                            <div class="card gradient-3">
                                <div class="card-body">
                                    <h5 class="card-title">Empréstimos Ativos</h5>
                                    <p class="card-text">50</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card de Livros Disponíveis -->
                        <div class="col-md-3">
                            <div class="card gradient-4">
                                <div class="card-body">
                                    <h5 class="card-title">Livros Disponíveis</h5>
                                    <p class="card-text">200</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer">
        <div class="container">
            <span>Desenvolvido por Carlos Vieira</span>
        </div>
    </footer>

    <!-- Bootstrap JS (opcional, se necessário) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Seleciona todos os itens de menu com submenu
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
