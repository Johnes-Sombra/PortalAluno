<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo-formulario.css">
    <title>Ficha de Matricula do Estudante</title>
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

    <header>
        <h1>Ficha de Matrícula do Estudante</h1>
        <div class="logo">
            <img src="./_img/logo-gov-ac-001.png" alt="Logo" width="80" height="80">
        </div>
    </header>

    <section id="dados_gerais">
        <h2>Dados Gerais</h2>
        <form action="processar_formulario.php" method="post">
            <!-- Campos do formulário aqui -->

            <input type="submit" value="Enviar">
            <input type="button" id="limpar_campos" value="Limpar Campos">
        </form>
    </section>
    <script src="./_js/ficha-matricula.js"></script>

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
