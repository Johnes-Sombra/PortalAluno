<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="/estilos/estilo-principal.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="content">
        <div class="container">
            <img src="/imagens/logos/logo-ktn.png" alt="Logo KTN Software" width="80" height="80">
            <!-- Formulário de login -->
            <form class="login-form" id="loginForm" action="login.php" method="POST">
                <h2>Faça login</h2>
                <input type="text" placeholder="Nome de usuário" name="username" required>
                <input type="password" placeholder="Senha" name="password" required>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer-content">
            <p class="roboto-regular">KTN Software @ <span id="currentYear"></span></p>
        </div>
    </footer>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>