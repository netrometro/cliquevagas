<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("persistency/db.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO empresa (nome, email, senha)";
    $sql .= " VALUES ('$nome', '$email', '$senha');";
    $resultado = banco($sql);
    header("Location: ../login.php ");
?>