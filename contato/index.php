<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre em contato conosco!</title>
    <link rel="stylesheet" href="./estilos/estilo-contato.css">
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
        <div class="form-container">
            <h1>Entre em Contato</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="nome">Nome completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
            <div class="social-buttons">
                <a href="https://www.instagram.com/ieptecacre" class="instagram-btn"><img src="./imagens/icones/instagram.png" alt="Instagram"> Siga o IEPTEC</a>
                <a href="https://ead.ieptec.ac.gov.br/" class="ieptec-ead-btn"><img src="./imagens/icones/ead-ieptec.png" alt="IEPTEC EAD"> Site IEPTEC</a>
            </div>
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
