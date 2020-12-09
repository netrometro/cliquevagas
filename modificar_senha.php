<?php
  if (isset($_GET['chave']) && $_GET['chave'] != "") {
    header("Location: /cliquevagas/erro_hash.html");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/empresa.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
        <a class="limpartitulo" href="index.php"> <img src="images/logo.png" /> Clique Vagas Caruaru</a>
      </div>
      <div class="conteudo">
      <div class="tema">
          <h2 class="tituloconta">Recuperar senha</h2>
          <h4 class="temasub">Não se preocupe, vamos te ajudar.</h4>
      </div>

      <div class="formulario">
      <form action="controllers/recuperar_senha.php" method="POST">
        <p>Nova senha:</p>
        <input class="caixasenha" type="password" name="senha" placeholder="Digite a nova senha" minlength="8" />
        <p>Confirmar senha:</p>
        <input class="caixasenha" type="password" name="senha" placeholder="Confirme a nova senha" minlength="8" />
        <button class="botaoconfirma" type="submit" >Recuperar senha</button>
      </form>
      </div>
    </div>
  </body>
</html>