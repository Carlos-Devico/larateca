<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Aplicação</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo personalizado */
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho de Navegação -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Lara Teca</a>
    </nav>

    <!-- Conteúdo da Página -->
    <div class="container-fluid">
        <div class="row">
            <!-- Menu de Operações (lado esquerdo) -->
            <div class="col-md-3 bg-secondary text-light full-height">
                <h3 class="mt-3">Operações</h3>
                <ul class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Livros</a>
                    <a href="#" class="list-group-item list-group-item-action">Criar Livro</a>
                    <a href="#" class="list-group-item list-group-item-action">Atualizar Livro</a>
                    <a href="#" class="list-group-item list-group-item-action">Excluir Livro</a>
                    <!-- Adicione mais operações conforme necessário -->
                </ul>
            </div>

            <!-- Conteúdo Principal (lado direito) -->
            <div class="col-md-9 mt-3">
                <div class="container">
                    <h2>Dashboard</h2>
                    <!-- Conteúdo do Dashboard -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total de Livros</h5>
                                    <p class="card-text">10</p>
                                </div>
                            </div>
                        </div>
                        <!-- Adicione mais cartões conforme necessário -->

                        <!-- Lista de Livros -->
                        <div class="col-md-12 mt-4" id="livros-section" style="display: none;">
                            <h3>Lista de Livros</h3>
                            <ul class="list-group">
                                <li class="list-group-item">Livro 1</li>
                                <li class="list-group-item">Livro 2</li>
                                <li class="list-group-item">Livro 3</li>
                                <!-- Adicione mais livros conforme necessário -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer">
        <div class="container">
            <span>Desenvolvido por [Seu Nome]</span>
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
