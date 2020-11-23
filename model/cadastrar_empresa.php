<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("persistency/db.php");
print_r ($_POST);
if (isset($_POST['submit'])) {
    $nome = $_POST['empresa'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    echo $nome;
    echo $email;
    echo $senha;
    $sql = "INSERT INTO empresa (nome, email, senha)";
    $sql .= " VALUES ('$nome', '$email', '$senha');";
    echo $sql;
    $resultado = banco($sql);
    echo $resultado;
    //header("Location: ../listaranuncio.php ")
  }
    //header("Location: ../empresa.html")
?>