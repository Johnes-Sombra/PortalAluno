<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo-formulario.css">
    <title>Ficha de Matrícula do Estudante</title>
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
            <label for="curso">Curso:</label><br>
            <select id="curso" name="curso" required>
                <option value="">Selecione o curso</option>
                <option value="Técnico em Administração">Técnico em Administração</option>
                <option value="Técnico em Comércio">Técnico em Comércio</option>
                <option value="Técnico em Computação Gráfica">Técnico em Computação Gráfica</option>
                <option value="Técnico em Redes de Computadores">Técnico em Redes de Computadores</option>
            </select><br>

            <!-- Outros campos do formulário -->
            <!-- Campo Nome Completo -->
            <label for="nome_completo">Nome Completo:</label><br>
            <input type="text" id="nome_completo" name="nome_completo" placeholder="Insira seu nome completo" required><br>

            <!-- Campo Nome Social -->
            <label for="nome_social">Nome Social:</label><br>
            <input type="text" id="nome_social" name="nome_social" placeholder="Insira seu nome social (se aplicável)"><br>

            <!-- Campo Data de Nascimento -->
            <label for="data_nascimento">Data de Nascimento:</label><br>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br>

            <!-- Outros campos do formulário -->

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
