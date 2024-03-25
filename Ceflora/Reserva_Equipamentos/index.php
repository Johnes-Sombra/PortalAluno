<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Equipamentos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container1">
    <h1>Equipamentos Disponíveis</h1>
    <div class="container-equipamentos">
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
                $sql = "SELECT equipamento FROM equipamentos";
                $result = $conn->query($sql);

                // Verificar disponibilidade e exibir na tabela
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['equipamento'] . "</td><td>Disponível</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Nenhum equipamento cadastrado</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    </div>
    <br>
    <div class="container2">


        <h1>Reserva de Equipamentos</h1>
        <form action="processar_reserva.php" method="POST">
            <label for="usuario">Usuário:</label>
            <select id="usuario" name="usuario">
            <option value="Alex Silva">Alex Silva</option>
            <option value="Anderson Araújo">Anderson Araújo</option>
            <option value="André Andrade">André Andrade</option>
            <option value="Elenilson Muniz">Elenilson Muniz</option>
            <option value="Gabriela">Gabriela</option>
            <option value="Johnes Sombra">Johnes Sombra</option>
            <option value="Joicyane Santana">Joicyane Santana</option>
            <option value="Jonas Freitas">Jonas Freitas</option>
            <option value="Naiara Fernandes">Naiara Fernandes</option>
            <option value="Naila Cauane">Naila Cauane</option>
            <option value="Nayara Souza">Nayara Souza</option>
            <option value="Pamela Cristina">Pamela Cristina</option>
            <option value="Rafael Batista">Rafael Batista</option>
            <option value="Samara da Silva">Samara da Silva</option>
            <option value="Vicente Neto">Vicente Neto</option>
            </select>

            <label for="equipamento">Equipamentos:</label>
            <select id="equipamento" name="equipamento">
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

                // Query para selecionar equipamentos disponíveis
                $sql = "SELECT equipamento FROM equipamentos";
                $result = $conn->query($sql);

                // Exibir opções no dropdown
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['equipamento'] . "'>" . $row['equipamento'] . "</option>";
                    }
                }
                $conn->close();
                ?>
            </select>

            <label for="curso">Curso:</label>
            <select id="curso" name="curso">
                <option value="Técnico em Computação Gráfica">Técnico em Computação Gráfica</option>
                <option value="Técnico em Redes de Computadores">Técnico em Redes de Computadores</option>
                <option value="Técnico em Desenho da Construção Civil">Técnico em Desenho da Construção Civil</option>
                <option value="QP em Agricultura Familiar">QP em Agricultura Familiar</option>
            </select>

            <label for="data_utilizar">Data de Utilização:</label>
            <input type="date" id="data_utilizar" name="data_utilizar">

            <label for="turno">Turno:</label>
            <select id="turno" name="turno">
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>

            <label for="data_devolucao">Data de Devolução:</label>
            <input type="date" id="data_devolucao" name="data_devolucao">
            <button type="submit">Reservar</button>
        </form>
    </div>
</body>
</html>


