<?php
if (isset($_GET['email']) && $_GET['email'] != "") {
  require("model/persistency/db.php");

  $sql = "DELETE FROM favbusca WHERE email='" . $_GET['email'] . "';";
  $resultado = banco($sql);
} else {
  header("Location: erro_geral.html");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/botoes.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
      <a href="index.php"> <img   src="images/logo.png" /></a>
      <a class="limpartitulo" href="index.php"> Clique Vagas Caruaru</a>
      </div>
      <div class="conteudo">
      <h1>Pesquisa apagada!</h1>
        <a class="botao bg3" href="index.php">Clique Vagas Caruaru</a>
      </div>
    </div>
  </body>
</html>