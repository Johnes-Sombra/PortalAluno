<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $usuario = $_POST['usuario'];
    $equipamento = $_POST['equipamento'];
    $curso = $_POST['curso'];
    $data_utilizar = $_POST['data_utilizar'];
    $turno = $_POST['turno'];
    $data_devolucao = $_POST['data_devolucao'];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "ceflora";
    $password = "123o456o";
    $database = "biblioteca";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Verificar disponibilidade do equipamento
    $sql = "SELECT * FROM reserva WHERE equipamento = '$equipamento' AND data_utilizar = '$data_utilizar' AND turno = '$turno'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Equipamento já reservado para esta data e turno. Por favor, escolha outro equipamento ou horário.";
    } else {
        // Inserir reserva no banco de dados
        $sql_insert = "INSERT INTO reserva (usuario, equipamento, curso, data_utilizar, turno, data_devolucao, status) VALUES ('$usuario', '$equipamento', '$curso', '$data_utilizar', '$turno', '$data_devolucao', 'PENDENTE')";
        if ($conn->query($sql_insert) === TRUE) {
            echo "Reserva efetuada com sucesso!";
        } else {
            echo "Erro ao efetuar reserva: " . $conn->error;
        }
    }

    $conn->close();
}
?>
