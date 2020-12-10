<?php
  require("../controllers/autentication.php");
  require("persistency/db.php");

   // Recupera na session o código do anunciante
  if (isset($_GET['codigo']) && $_GET['codigo'] != "" ) {
    $codigo = pg_escape_string($_GET['codigo']);

    // faz uma pesquisa no banco e recupera os dados referentes ao anuncio pelo código
    $sql = "SELECT * FROM $codigo";
    $resultado = banco($sql);
  }
?>