<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conheça os cursos ofertados</title>
    <link rel="stylesheet" href="./_css/estilo-cursos.css">
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
    
    <div class="content">
        <div class="container">
            <div class="course">
                <div class="course-item">
                    <img src="./cursos/001.jpeg" alt="Curso 1">
                    <h3>Qualificação Profissional em Agente de Assistência Técnica e Extensão Rural</h3>
                    <p>Curso para formação de agentes de assistência técnica e extensão rural.</p>
                </div>
                <div class="course-item">
                    <img src="./cursos/002.jpeg" alt="Curso 2">
                    <h3>Qualificação Profissional em Agricultor Agroflorestal</h3>
                    <p>Curso para formação de agricultores com conhecimentos em agrofloresta.</p>
                </div>
                <div class="course-item">
                    <img src="./cursos/003.jpeg" alt="Curso 3">
                    <h3>Qualificação Profissional em Agricultor Familiar</h3>
                    <p>Curso para formação de agricultores familiares.</p>
                </div>
                <div class="course-item">
                    <img src="./cursos/004.jpeg" alt="Curso 3">
                    <h3>Qualificação Profissional em Agricultor Familiar</h3>
                    <p>Curso para formação de agricultores familiares.</p>
                </div>

                <!-- Adicione os cursos restantes seguindo o mesmo formato -->
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer-content">
            <p>KTN Software @ <span id="currentYear"></span></p>
        </div>
    </footer>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>
