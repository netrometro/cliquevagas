<?php 
require("controllers/autentication.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/botoes.css" />
    <link rel="stylesheet" href="style/card.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
      <a href="index.php"> <img   src="images/logo.png" /></a>
      <a class="limpartitulo" href="index.php"> Click Vagas Caruaru</a>
      </div>
      <div class="conteudo">
      <a class="bt_principal" href="adicionaranuncio.php">Anunciar</a>
      
      <div class="resultado">
          <div class="card">
            <div class="col c1">
              <a href="#"><i class="material-icons">edit</i></a>
            </div>
            <div class="col c2">
              <p>SENAC</p>
              <p>27/11/2020</p>
              <p>Descrição...</p>
              <p><strong>Contato:</strong></p>
              <p>caruaru@gmail.com</p>
              <p>site</p>
              <p>telefone</p>
              <p>endereço</p>
            </div>
            <div class="col c3">
              <a href="#"><i class="material-icons">cancel</i></a>
            </div>
          </div>

          <div class="card inativo">
            <div class="col c1">
              <a href="#"><i class="material-icons">edit</i></a>
            </div>
            <div class="col c2">
              <p>SENAC</p>
              <p>27/11/2020</p>
              <p>Descrição...</p>
              <p><strong>Contato:</strong></p>
              <p>caruaru@gmail.com</p>
              <p>site</p>
              <p>telefone</p>
              <p>endereço</p>
            </div>
            <div class="col c3">
              <a href="#"><i class="material-icons">cancel</i></a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </body>
</html>