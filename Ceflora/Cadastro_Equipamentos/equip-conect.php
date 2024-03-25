<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "ceflora";
$password = "123o456o";
$database = "biblioteca";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    header("Location: falha.php");
    exit();
}

// Receber dados do formulário
$equipamento = $_POST['equipamento'];
$descricao = $_POST['descricao'];
$acessorios = $_POST['acessorios'];

// Inserir dados no banco de dados
$sql = "INSERT INTO equipamentos (equipamento, descricao, acessorios) VALUES ('$equipamento', '$descricao', '$acessorios')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./sucesso.php");
    exit();
} else {
    header("Location: ./falha.php");
    exit();
}

// Fechar conexão
$conn->close();
?>