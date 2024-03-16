<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <!-- Atualização automática da página a cada 60 segundos -->
    <meta http-equiv="refresh" content="60">
    <!-- Meta tag de viewport para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página -->
    <title>Bem-vindo</title>
    <!-- Folha de estilo principal -->
    <link rel="stylesheet" href="/estilos/estilo-principal.css">
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Conteúdo da página -->
    <div class="content">
        <div class="container">
            <!-- Logo da empresa -->
            <img src="/ktn-branco.png" alt="Logo KTN Software" width="80" height="80">
            <!-- Formulário de login -->
            <form class="login-form" id="loginForm" action="login.php" method="POST">
                <h2>Faça login</h2>
                <!-- Campo de entrada para o nome de usuário -->
                <input type="text" placeholder="Nome de usuário" id="username" required>
                <!-- Campo de entrada para a senha -->
                <input type="password" placeholder="Senha" id="password" required>
                <!-- Botão de envio do formulário -->
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
    
    <!-- Rodapé da página -->
    <footer class="footer">
        <div class="footer-content">
            <!-- Informações de rodapé -->
            <p class="roboto-regular">KTN Software @ <span id="currentYear"></span></p>
        </div>
    </footer>

    <!-- Script JavaScript para atualizar o ano no rodapé -->
    <script>
        // Aguarda o carregamento completo do documento
        document.addEventListener("DOMContentLoaded", function() {
            // Atualiza o ano atual no elemento com o ID "currentYear"
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        });
    </script>
</body>
</html>
