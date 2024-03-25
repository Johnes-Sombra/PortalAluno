<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Equipamentos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Equipamentos Cadastrados</h1>
        <table>
            <thead>
                <tr>
                    <th class="tb-colum1">Equipamento</th>
                    <th class="tb-colum2">Descrição</th>
                    <th class="tb-colum3">Acessórios</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conectar ao banco de dados
                $servername = "localhost";
                $username = "ceflora";
                $password = "123o456o";
                $database = "biblioteca";

                $conn = new mysqli($servername, $username, $password, $database);

                // Verificar a conexão
                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }

                // Selecionar os dados do banco de dados
                $sql = "SELECT equipamento, descricao, acessorios FROM equipamentos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output dos dados em uma tabela
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["equipamento"] . "</td>";
                        echo "<td>" . $row["descricao"] . "</td>";
                        echo "<td>" . $row["acessorios"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhum equipamento cadastrado.</td></tr>";
                }
                // Fechar conexão
                $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <a href="./">Voltar ao Cadastro</a>
    </div>
</body>
</html>
