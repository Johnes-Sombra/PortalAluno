<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça sua matrícula agora mesmo!</title>
    <link rel="stylesheet" href="./estilos/estilo-matricula.css">
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
    
    <div class="matricula-container">
        <div class="matricula-box">
            <h2>Documentos necessários para a Matrícula:</h2>
            <ul>
                <li>Documento de identificação com foto: RG, CNH ou Carteira de Trabalho;</li>
                <li>CPF;</li>
                <li>Título de eleitor e comprovante eleitoral (para pessoas na faixa etária obrigatória);</li>
                <li>Comprovante de residência: conta de luz ou água;</li>
                <li>Certificado de conclusão do Ensino Médio ou histórico escolar;</li>
                <li>Comprovante de Quitação com o Serviço Militar (para homens);</li>
                <li>Histórico escolar e certificado de conclusão do ensino médio;</li>
                <li>Certidão de nascimento ou casamento;</li>
            </ul>
            <a href="./cadastro/ficha-de-matricula.php" class="btn">Realizar Matrícula</a>
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
