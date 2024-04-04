<?php

require_once 'configBanco.php'; // Inclui o arquivo de conexão com o banco de dados

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['usuario'] = $row;
    header("Location: home.php");
} else {
    echo "Email ou senha inválidos";
}

?>
