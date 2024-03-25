<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Equipamentos</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <div class="container">
        <h1>Equipamentos Disponíveis</h1>
        <table>
            <thead>
                <tr>
                    <th>Equipamento</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conexão com o banco de dados
                $servername = "localhost";
                $username = "ceflora";
                $password = "123o456o";
                $database = "biblioteca";
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }

                // Query para selecionar equipamentos e seus status de disponibilidade
                $sql = "SELECT equipamento, data_devol FROM reserva";
                $result = $conn->query($sql);

                // Verificar disponibilidade e exibir na tabela
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $status = ($row['data_devol'] < date('Y-m-d')) ? 'Disponível' : 'Indisponível';
                        echo "<tr><td>" . $row['equipamento'] . "</td><td>" . $status . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Nenhum equipamento cadastrado</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <h1>Reserva de Equipamentos</h1>
        <form action="processar_reserva.php" method="POST">
            <!-- Restante do formulário de reserva aqui -->
        </form>
    </div>
</body>
</html>
