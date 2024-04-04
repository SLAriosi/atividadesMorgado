<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Pesquisa</title>
   <link rel="stylesheet" href="style.css">       
</head>

<h2>Consulta de Pesquisa</h2>

<table>
    <tr>
        <th>Região</th>
        <th>Descrição</th>
        <th>Status</th>
    </tr>

    <?php
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pesquisa";

    // Conecta ao banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta os dados da tabela 'pesquisa'
    $sql = "SELECT regiao, descricao, status FROM pesquisa";
    $result = $conn->query($sql);

    // Exibe os dados em uma tabela HTML
    if ($result->num_rows > 0) {
        // Saída de cada linha de dados
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["regiao"]."</td><td>".$row["descricao"]."</td><td>".$row["status"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum resultado encontrado</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
