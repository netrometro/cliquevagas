<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("persistency/db.php");
if (!isset($_POST['empresa']) || $_POST['empresa'] == "" && 
    !isset($_POST['email']) || $_POST['email'] == ""  && 
    !isset($_POST['senha']) || $_POST['senha'] == "" ) {
        $nome = $_POST['empresa'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    $sql = 'INSERT INTO empresa (nome, email, senha)';
    $sql .= "VALUES ('$nome', '$email', '$senha');";
    banco($sql);
    echo $sql;
    //header("Location: ../listaranuncio.php ")
  }
    //header("Location: ../empresa.html")
?>