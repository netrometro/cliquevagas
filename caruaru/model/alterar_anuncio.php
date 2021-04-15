<?php
  require("../controllers/autentication.php");
  print_r($_POST);

  if (isset($_POST['precisase']) && $_POST['precisase'] != "" && isset($_POST['codigo']) && $_POST['codigo'] != "") {
    require("persistency/db.php");

    $codigo = pg_escape_string($_POST['codigo']);
    $precisase = pg_escape_string($_POST['precisase']);
    $descricao = pg_escape_string($_POST['descrisao']);
    $telefone = pg_escape_string($_POST['telefone']);
    $email = pg_escape_string($_POST['email']);
    $site = pg_escape_string($_POST['site']);
    $endereco = pg_escape_string($_POST['endereco']);
   $dias = pg_escape_string($_POST['dias']);

    $datainsercao = date("Y/m/d");
    $datavencimento = date('Y/m/d', strtotime($datainsercao . ' + ' . $dias .' days'));
   
    $sql = "UPDATE anuncios SET precisase = '$precisase', descricao = '$descricao', telefone = '$telefone', email = '$email', site = '$site', endereco = '$endereco', data_vencimento ='$datavencimento' WHERE codigo = $codigo ";
    $resultado = banco($sql);

    header("Location: ../perfil.php");
  } else {
    header("Location: ../erroformulario.html");
  }
?>