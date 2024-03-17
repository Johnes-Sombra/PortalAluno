<?php
// Conectar ao banco de dados MySQL
$conexao = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco_de_dados");

// Verificar a conexão
if (mysqli_connect_errno()) {
    echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
    exit();
}

// Receber os dados do formulário
$curso = $_POST['curso'];
$nome_completo = $_POST['nome_completo'];
// Adicione os demais campos do formulário aqui...

// Inserir os dados no banco de dados
$sql = "INSERT INTO tabela_matriculas (curso, nome_completo, ...) VALUES ('$curso', '$nome_completo', ...)";
if (mysqli_query($conexao, $sql)) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}

// Fechar conexão com o banco de dados
mysqli_close($conexao);
?>
