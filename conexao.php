<?php
$host = "localhost";
$user = "root";
$password = "root";
$db = "crud_system";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Conexao Falhou: " . $conn -> connect_error);
}
?>