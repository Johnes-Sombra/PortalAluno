<?php
// Define o caminho base do site
define('BASE_PATH', __DIR__);

// Inclui o arquivo de cabeçalho comum
include(BASE_PATH . '/header.php');
?>

<!-- Conteúdo da página -->
<div class="content">
    <div class="container">
        <!-- Logo da empresa -->
        <img src="/imagens/logos/logo-ktn.png" alt="Logo KTN Software" width="80" height="80">
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

<?php
// Inclui o arquivo de rodapé comum
include(BASE_PATH . '/footer.php');
?>
