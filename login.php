<?php
// Conexão com o banco de dados Access
try {
    $db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=./dados-alunos/login-alunos.accdb");
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    exit();
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Consulta o banco de dados para verificar as credenciais
    $query = $db->prepare("SELECT * FROM usuarios WHERE username = :username AND password = :password");
    $query->bindParam(":username", $username);
    $query->bindParam(":password", $password);
    $query->execute();
    
    // Verifica se há algum resultado
    if ($query->rowCount() > 0) {
        // Autenticação bem-sucedida
        echo "Login bem-sucedido!";
    } else {
        // Autenticação falhou
        echo "Nome de usuário ou senha inválidos.";
    }
}
?>
