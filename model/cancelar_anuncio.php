<?php
// verifica a autenticação
  require("../controllers/autentication.php");
  require("persistency/db.php");
  // recebe por get o código do anúncio a ser cancelado
  if (isset($_GET['codigo']) && $_GET['codigo'] != "" ) {
    $codigo = pg_escape_string($_GET['codigo']);

  // se existir
  //    faz o update da data final do anúncio para o dia de ontem
  $hoje = date("Y/m/d");
  $datavencimento = date('Y/m/d', strtotime($hoje . ' -1 days'));

  $sql = "UPDATE anuncios SET data_vencimento = '$datavencimento' WHERE codigo = '$codigo'";
  $resultado = banco($sql);  

  //    redireciona para a página de perfil
  header('Location: ../perfil.php'); 
  }
?>