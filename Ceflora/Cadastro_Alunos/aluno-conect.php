<?php
// Configurações do banco de dados
$servidor = "localhost";
$usuario = "ceflora";
$senha = "123o456o";
$banco = "biblioteca";

// Conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Coleta os dados do formulário
$curso = $_POST['curso'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$contato = $_POST['contato'];

// Prepara e executa a query de inserção
$sql = "INSERT INTO alunos (curso, nome, cpf, endereco, numero, bairro, contato) VALUES ('$curso', '$nome', '$cpf', '$endereco', '$numero', '$bairro', '$contato')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
