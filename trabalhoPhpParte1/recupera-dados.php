<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Dados</title>
    <link rel="stylesheet" href="style_recupera.css">
</head>
<body>
    <div class="container">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $idade = $_POST["idade"];
            $hobbie = $_POST["hobbie"];

            if (strlen($nome) < 6) {
                echo "<div class='error'>Erro: O nome precisa ter no mínimo 6 caracteres.</div>";
                exit;
            }

            if ($idade < 18) {
                echo "<div class='error'>Erro: A idade precisa ser maior que 18.</div>";
                exit;
            }

            echo "<h2>Dados Recebidos:</h2>";
            echo "<div class='data'><strong>Nome:</strong> $nome</div>";
            echo "<div class='data'><strong>Email:</strong> $email</div>";
            echo "<div class='data'><strong>Idade:</strong> $idade</div>";
            echo "<div class='data'><strong>Hobbie:</strong> $hobbie</div>";
        } else {

            echo "<div class='error'>Erro: Os dados não foram enviados corretamente.</div>";
        }
        ?>
    </div>
</body>
</html>