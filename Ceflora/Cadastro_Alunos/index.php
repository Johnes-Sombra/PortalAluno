<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estudantes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Estudantes</h2>
        <form action="aluno-conect.php" method="POST">
            <div class="form-group">
                <label for="curso">Curso:</label>
                <select name="curso" id="curso">
                    <option value="Técnico em Administração">Técnico em Administração</option>
                    <option value="Técnico em Redes de Computadores">Técnico em Redes de Computadores</option>
                    <option value="Técnico em Computação Gráfica">Técnico em Computação Gráfica</option>
                    <option value="Técnico em Farmácia">Técnico em Farmácia</option>
                    <option value="Técnico em Enfermagem">Técnico em Enfermagem</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" required>
            </div>
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero" required>
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" required>
            </div>
            <div class="form-group">
                <label for="contato">Contato:</label>
                <input type="text" name="contato" id="contato" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
