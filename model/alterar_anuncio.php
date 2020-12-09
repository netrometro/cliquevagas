<?php
  require("../controllers/autentication.php");
  require("persistency/db.php");

  if (isset($_GET['codigo']) && $_GET['codigo'] != "" ) {
    // Recupera na session o código do anunciante
    // faz uma pesquisa no banco e recupera os dados referentes ao anuncio pelo código
  }
?>