<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos necessários para matrícula do estudante</title>
    <link rel="stylesheet" href="./_css/estilo-matricula.css">
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
    
    <div class="matricula-container">
        <div class="matricula-box">
            <h2>Documentos necessários para a Matrícula:</h2>
            <ul>
                <li>Foto 3x4;</li>
                <li>Documentos de identidade do estudante;</li>
                <li>Documentos de identidade do responsável (Se for menor de idade);</li>
                <li>Título de eleitor (para pessoas na faixa etária obrigatória);</li>
                <li>Comprovante de Endereço;</li>
                <li>Cacastro do Credor;</li>
                <li>Comprovante de Escolaridade;</li>
                <li>Endereço de E-mail para contato;</li>
                <li>Telefone para contato;</li>
                <li>Telefone para recados;</li>
            </ul>
            <a href="./matricula.php" class="btn">Realizar Matrícula</a>
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
