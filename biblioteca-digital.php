<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="./estilos/estilo-biblioteca.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="/">Página Inicial</a></li>
            <li><a href="./cursos.php">Cursos</a></li>
            <li><a href="./matricula.php">Matrícula</a></li>
            <li><a href="./biblioteca-digital.php">Biblioteca</a></li>
            <li><a href="./contato.php">Contato</a></li>
            <li><a href="./sobre.php">Sobre</a></li>
        </ul>
    </nav>
    
    <div class="content">
        <div class="container">
            <h2>Categorias de Apostilas</h2>
            <ul class="categorias">
                <li><a href="#" onclick="mostrarApostilas('ambiente-saude')">Ambiente e Saúde</a></li>
                <li><a href="#" onclick="mostrarApostilas('gestao-negocios')">Gestão e Negócios</a></li>
                <li><a href="#" onclick="mostrarApostilas('informacao-comunicacao')">Informação e Comunicação</a></li>
                <li><a href="#" onclick="mostrarApostilas('recursos-naturais')">Recursos Naturais</a></li>
            </ul>

            <div id="apostilas"></div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer-content">
            <p class="roboto-regular">KTN Software @ <span id="currentYear"></span></p>
        </div>
    </footer>

    <script src="./biblioteca/js/biblioteca.js"></script>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>
