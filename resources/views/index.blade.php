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
            background-color: #1d272d;
            /* Cor de fundo do corpo */
            color: #dc1d30;
            /* Cor do texto */
        }

        .navbar-brand img {
            max-width: 35px;
            vertical-align: middle;
        }

        .navbar-dark {
            background-color: #36263d;
            /* Altera a cor do navbar */
        }

        .list-group {
            background-color: #d23545;
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
            background-color: #36263d;
            color: white;
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

        /* Brilho ao passar o mouse */
        .list-group-item:hover {
            background-color: #ee833b;
            /* Altere a cor conforme necessário */
            transition: background-color 0.3s ease;
        }

        /* Efeito de tremor ao ser selecionado */
        .list-group-item:active {
            animation: shake 0.5s;
            /* Utiliza a animação "shake" */
        }

        /* Define a animação de tremor */
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

        /* Estilos para os cards */
        .card {
            margin-bottom: 20px;
            height: 150px;
            /* Define uma altura fixa para os cards */
            position: relative;
            /* Adiciona posição relativa para os cards */
            border-radius: 15px;
            /* Adiciona borda arredondada aos cards */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Adiciona sombra aos cards */
            transition: box-shadow 0.3s ease;
            /* Adiciona transição suave para a sombra */
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Aumenta a sombra ao passar o mouse */
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
            font-size: 1.5rem;
        }

        .card-text {
            font-size: 1.2rem;
        }

        /* Estilos para os cards gradientes */
        .gradient-1 {
            background: linear-gradient(45deg, #dc1d30, #36263d);
            /* Gradiente 1 */
        }

        .gradient-2 {
            background: linear-gradient(45deg, #dc1d30, #161e23);
            /* Gradiente 2 */
        }

        .gradient-3 {
            background: linear-gradient(45deg, #dc1d30, #7b4594);
            /* Gradiente 3 */
        }

        .gradient-4 {
            background: linear-gradient(45deg, #dc1d30, #ff6347);
            /* Gradiente 4 */
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
                        <li class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i> Criar Leitores</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-user-edit"></i> Atualizar Leitores</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-user-times"></i> Excluir Leitores</li>
                        <!-- Adicione mais operações conforme necessário -->
                    </ul>
                    
                    {{--  EMPRESTIMOS  --}}

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-handshake"></i> Empréstimos
                    </a>
                    <ul class="submenu list-group">
                        <li class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Criar Empréstimos</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-sync-alt"></i> Atualizar Empréstimos</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-trash-alt"></i> Excluir Empréstimos</li>
                        <!-- Adicione mais operações conforme necessário -->
                    </ul>
                    

                    {{--  AUTORES  --}}

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-user"></i> Autores
                    </a>
                    <ul class="submenu list-group">
                        <li class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Criar Autores</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-sync-alt"></i> Atualizar Autores</li>
                        <li class="list-group-item list-group-item-action"><i class="fas fa-trash-alt"></i> Excluir Autores</li>
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
        // Mostrar/ocultar a seção de livros ao clicar em "Livros" na barra lateral
        document.querySelector('.list-group-item[href="#"]').addEventListener('click', function() {
            document.getElementById('livros-section').style.display = 'block';
        });
    </script>
</body>

</html>
