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

            <label for="nome_completo">Nome Completo:</label><br>
            <input type="text" id="nome_completo" name="nome_completo" placeholder="Insira seu nome completo" required><br>

            <label for="nome_social">Nome Social:</label><br>
            <input type="text" id="nome_social" name="nome_social" placeholder="Insira seu nome social (se aplicável)"><br>

            <label for="data_nascimento">Data de Nascimento:</label><br>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br>

            <label for="rg_cnh">RG/CNH:</label><br>
            <input type="text" id="rg_cnh" name="rg_cnh" placeholder="Insira seu RG ou CNH" required><br>

            <label for="orgao_expedidor">Órgão Expedidor:</label><br>
            <input type="text" id="orgao_expedidor" name="orgao_expedidor" placeholder="Insira o órgão expedidor" required><br>

            <label for="data_expedicao">Data de Expedição:</label><br>
            <input type="date" id="data_expedicao" name="data_expedicao" required><br>

            <label for="cpf">CPF:</label><br>
            <input type="text" id="cpf" name="cpf" placeholder="Insira seu CPF" required><br>

            <label for="titulo_eleitor">Título de Eleitor:</label><br>
            <input type="text" id="titulo_eleitor" name="titulo_eleitor" placeholder="Insira seu título de eleitor"><br>

            <label for="nacionalidade">Nacionalidade:</label><br>
            <input type="text" id="nacionalidade" name="nacionalidade" placeholder="Insira sua nacionalidade" required><br>

            <label for="naturalidade">Naturalidade:</label><br>
            <input type="text" id="naturalidade" name="naturalidade" placeholder="Insira sua naturalidade" required><br>

            <label for="nome_mae">Nome da Mãe:</label><br>
            <input type="text" id="nome_mae" name="nome_mae" placeholder="Insira o nome da mãe" required><br>

            <label for="nome_pai">Nome do Pai:</label><br>
            <input type="text" id="nome_pai" name="nome_pai" placeholder="Insira o nome do pai"><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco" placeholder="Insira seu endereço" required><br>

            <label for="numero">Número:</label><br>
            <input type="text" id="numero" name="numero" placeholder="Insira o número" required><br>

            <label for="bairro">Bairro:</label><br>
            <input type="text" id="bairro" name="bairro" placeholder="Insira o bairro" required><br>

            <label for="cep">CEP:</label><br>
            <input type="text" id="cep" name="cep" placeholder="Insira o CEP" required><br>

            <label for="municipio">Município:</label><br>
            <input type="text" id="municipio" name="municipio" placeholder="Insira o município" required><br>

            <label for="estado">Estado:</label><br>
            <input type="text" id="estado" name="estado" placeholder="Insira o estado" required><br>

            <label for="telefone_contato">Telefone de Contato:</label><br>
            <input type="text" id="telefone_contato" name="telefone_contato" placeholder="Insira o telefone de contato" required><br>

            <label for="telefone_recado">Telefone de Recado:</label><br>
            <input type="text" id="telefone_recado" name="telefone_recado" placeholder="Insira o telefone de recado" required><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" placeholder="Insira seu e-mail" required><br>

            <label for="cadastro_credor">Cadastro do Credor:</label><br>
            <input type="text" id="cadastro_credor" name="cadastro_credor" placeholder="Insira o cadastro do credor" required><br>

            <label for="alergia_medicamento">Tem alergia a algum medicamento?</label><br>
            <select id="alergia_medicamento" name="alergia_medicamento" required>
                <option value="">Selecione</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select><br>

            <label for="qual_alergia">Qual:</label><br>
            <input type="text" id="qual_alergia" name="qual_alergia" placeholder="Descreva a alergia"><br>

            <label for="deficiencia">Tem alguma Deficiência?</label><br>
            <select id="deficiencia" name="deficiencia" required>
                <option value="">Selecione</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select><br>

            <label for="qual_deficiencia">Qual:</label><br>
            <input type="text" id="qual_deficiencia" name="qual_deficiencia" placeholder="Descreva a deficiência"><br>

            <label for="emprego">Emprego?</label><br>
            <select id="emprego" name="emprego" required>
                <option value="">Selecione</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select><br>

            <label for="local_trabalho">Local de Trabalho:</label><br>
            <input type="text" id="local_trabalho" name="local_trabalho" placeholder="Insira o local de trabalho"><br>

            <label for="raca_cor">Raça/Cor:</label><br>
            <select id="raca_cor" name="raca_cor">
                <option value="Amarela">Amarela</option>
                <option value="Branca">Branca</option>
                <option value="Indígena">Indígena</option>
                <option value="Parda">Parda</option>
                <option value="Preta">Preta</option>
                <option value="Não declarada">Não declarada</option>
            </select><br>

            <label for="cad_unico">CAD Único?</label><br>
            <select id="cad_unico" name="cad_unico">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select><br>

            <label for="bolsa_familia">Participa do programa bolsa família?</label><br>
            <select id="bolsa_familia" name="bolsa_familia">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select><br>

            <input type="checkbox" id="declaracao" name="declaracao" required>
            <label for="declaracao">Declaro que são verdadeiras todas as informações prestadas.</label><br>

            <input type="submit" value="Enviar" disabled>
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
