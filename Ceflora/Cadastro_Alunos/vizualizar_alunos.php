<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Alunos</title>
    <link rel="stylesheet" href="./vizualizar.css">
</head>
<body>
    <div class="container">
        <h2>Alunos Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Número</th>
                    <th>Bairro</th>
                    <th>Contato</th>
                </tr>
            </thead>
            <tbody>
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

                // Query para selecionar todos os alunos
                $sql = "SELECT * FROM alunos";
                $result = $conn->query($sql);

                // Verifica se há resultados
                if ($result->num_rows > 0) {
                    // Loop através dos resultados
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['curso'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['cpf'] . "</td>";
                        echo "<td>" . $row['endereco'] . "</td>";
                        echo "<td>" . $row['numero'] . "</td>";
                        echo "<td>" . $row['bairro'] . "</td>";
                        echo "<td>" . $row['contato'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Nenhum aluno cadastrado.</td></tr>";
                }

                // Fecha a conexão com o banco de dados
                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="../">Voltar</a>
    </div>
</body>
</html>
