<?php
// verifica a autenticação
  require("../controllers/autentication.php");
  require("persistency/db.php");
  // recebe por get o código do anúncio a ser cancelado
  if (isset($_GET['codigo']) && $_GET['codigo'] != "" ) {
    $chave = pg_escape_string($_POST['chave']);

  // se existir
  //    faz o update da data final do anúncio para o dia de ontem
  $datainsercao = date("Y/m/d");
  $datavencimento = date('Y/m/d', strtotime($datainsercao . ' - ' . $dias .' days'));

  $sql = "UPDATE empresa SET data_insercao = "$datainsercao", data_vencimento = "$datavencimento" WHERE chave = '$chave'";
  $resultado = banco($sql);  

  //    redireciona para a página de perfil
  header('Location: ../perfil.php'); 
  }

?>