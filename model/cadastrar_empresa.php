<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("persistency/db.php");
echo $_POST['empresa'];
echo $_POST['email'];
echo $_POST['senha'];
if (isset($_POST['submit'])) {
    $nome = $_POST['empresa'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = 'INSERT INTO empresa (nome, email, senha)';
    $sql .= "VALUES ('$nome', '$email', '$senha');";
    if($sql){
        echo "Dados gravado com sucesso.";
    }
    $resultado = banco($sql);
    echo $resultado;
    //header("Location: ../listaranuncio.php ")
  }
    //header("Location: ../empresa.html")
?>