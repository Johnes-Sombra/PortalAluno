<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/estilo-formulario.css">
    <script src="./cadastro/js/ficha-matricula.js"></script>
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
            <img src="./cadastro/imagens/logo-gov-ac-001.png" alt="Logo" width="80" height="80">
        </div>
    </header>

    <section id="dados_gerais">
        <h2>Dados Gerais</h2>
        <form action="processar_formulario.php" method="post">
            <label for="curso">Curso:</label><br>
            <input type="text" id="curso" name="curso" placeholder="Insira o nome do curso" required><br>

            <label for="nome_completo">Nome Completo:</label><br>
            <input type="text" id="nome_completo" name="nome_completo" placeholder="Insira seu nome completo" required><br>

            <input type="text" id="nome_social_text" name="nome_social_text" placeholder="Insira seu nome social (se aplicável)"><br>

            <label for="data_nascimento">Data de Nascimento:</label><br>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br>
            
            <!-- Restante dos campos do formulário -->
            
            <input type="submit" value="Enviar">
        </form>
    </section>

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
