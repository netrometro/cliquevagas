<?php
  require("../controllers/autentication.php");

  if (isset($_POST['precisase']) && $_POST['precisase'] != "" && ) {
    require("persistency/db.php");

    $precisase = pg_escape_string($_POST['precisase']);
    $descricao = pg_escape_string($_POST['descricao']);
    $telefone = pg_escape_string($_POST['telefone']);
    $email = pg_escape_string($_POST['email']);
    $site = pg_escape_string($_POST['site']);
    $endereco = pg_escape_string($_POST['endereco']);
    $dias = pg_escape_string($_POST['dias']);

    $datainsercao = date("Y/m/d");
    $datavencimento = date('Y/m/d', strtotime($datainsercao . ' + ' . $dias .' days'));
   
    $sql = "UPDATE anuncios SET precisase = '$precisase', descricao = '$descricao', telefone = '$telefone', email = '$email', site = '$site', endereco = '$endereco', dias = '$dias',  WHERE codigo = '$codigo'";
    $resultado = banco($sql);

    header("Location: ../perfil.php");
  } else {
    header("Location: ../erroformulario.html");
  }
?>