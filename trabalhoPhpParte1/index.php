<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="recupera-dados.php" method="POST">
        <h2>Preencha o formulário:</h2>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required minlength="6"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade" required><br>
        
        <label for="hobbie">Hobbie:</label><br>
        <input type="text" id="hobbie" name="hobbie"><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
