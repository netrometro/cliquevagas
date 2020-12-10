<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("persistency/db.php");

if (isset($_POST['nome']) && $_POST['nome'] != "" && isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['senha']) && $_POST['senha'] != "" ) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    (pg_num_rows($sql)<0) {
        $sql = "INSERT INTO empresa (nome, email, senha)";
        $sql .= " VALUES ('$nome', '$email', '$senha');";
        $resultado = banco($sql);
        header("Location: ../login.php");
    } else {
        header("Location: ../emailexistente.html");
    }

?>