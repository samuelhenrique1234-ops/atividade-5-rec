<?php
// Cadastro com erros de sintaxe e falta de validação
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO user (nome, email) VALUE ('$nome', '$email')";

    
    if ($conn->query($sql) === true){
    echo "Usuário cadastrado com sucesso!";
    } else {
    echo "Erro" . $sql . "<br>" . $conn->error;
    }
       $conn -> close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <form method="POST" action="cadastrar.php">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Cadastrar">
</form>
 <a href="index.php">Ver registros.</a>
</body>
</html>