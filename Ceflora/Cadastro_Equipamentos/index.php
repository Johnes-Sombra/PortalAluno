<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Equipamentos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Equipamentos</h1>
        <form id="equipamentoForm" action="equip-conect.php" method="POST">
            <label for="equipamento">Equipamento:</label>
            <input type="text" id="equipamento" name="equipamento" required>

            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" required>

            <label for="acessorios">Acessórios:</label>
            <input type="text" id="acessorios" name="acessorios" required>
            <br>
            <div class=botao1>
            <button type="submit">Salvar</button>
            </div>
            
            
        </form>
        <br>
        <a href="./vizualizar_equipamentos.php">Vizualizar Equipamentos Cadastrados</a>
    </div>
</body>
</html>