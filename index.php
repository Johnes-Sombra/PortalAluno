<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="./_css/estilo-principal.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="/">Página Inicial</a></li>
            <li><a href="./cursos">Cursos</a></li>
            <li><a href="./matricula">Matrícula</a></li>
            <li><a href="./biblioteca">Biblioteca</a></li>
            <li><a href="./contato">Contato</a></li>
            <li><a href="./sobre">Sobre</a></li>
        </ul>
    </nav>

    <!-- Conteúdo da página -->
    <div class="content">
        <div class="container">

            <img src="./_img/logos/ktn-branco.png" alt="KTN Software" width="80" height="80">
            
            <!-- Formulário de login -->
            <form class="login-form" id="loginForm" action="login.php" method="POST">
                <h2>Faça login</h2>
                <input type="text" placeholder="Nome de usuário" id="username" required>
                <input type="password" placeholder="Senha" id="password" required>
                <button type="submit">Entrar</button>
            </form>
            
        </div>
    </div>
    
    <!-- Rodapé da página -->
    <footer class="footer">
        <div class="footer-content">
            <p class="roboto-regular">KTN Software @ <span id="currentYear"></span></p>
        </div>
    </footer>

    <!-- Script JavaScript para atualizar o ano no rodapé -->
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>
