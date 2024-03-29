<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - Cept Ceflora</title>
    <link rel="stylesheet" href="./estilo.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="./">Página Inicial</a></li>
            <li><a href="./cursos">Cursos</a></li>
            <li><a href="./matricula">Matrícula</a></li>
            <li><a href="./biblioteca">Biblioteca</a></li>
            <li><a href="./contato">Contato</a></li>
            <li><a href="./sobre">Sobre</a></li>
        </ul>
    </nav>

    <!-- Conteúdo da página -->
    <img src="./wallpaper-ceflora.jpg" alt="Cept Ceflora" class="image">

    
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
