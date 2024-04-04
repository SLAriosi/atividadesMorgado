<?php

// Configurações do banco de dados
$hostname = 'localhost'; // endereço do servidor MySQL (geralmente localhost)
$username = 'root'; // nome de usuário do banco de dados
$password = ''; // senha do banco de dados
$database = 'atividadeextra'; // nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>
