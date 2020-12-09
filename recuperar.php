<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/empresa.css" />
    <link rel="stylesheet" href="style/recuperar.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
        <a href="index.php"> <img src="images/logo.png" /></a>
        <a class="limpartitulo" href="index.php"> Clique Vagas Caruaru</a>
      </div>
      <div class="conteudo">
      <div class="tema">
          <h2 class="tituloconta">Recuperar senha</h2>
          <h4 class="temasub">Não se preocupe, vamos te ajudar.</h4>
      </div>

      <div class="formulario">
      <form method="POST" action="controllers/recuperar_email.php">
          <p>E-mail:</p>
          <input class="caixaemail" type="email" name="email" placeholder="Digite o e-mail da sua empresa" />
          <button class="botaoconfirma" type="submit" >Recuperar senha</button>
      </form>
      </div>
      <div class="linklogin">
      <p class="pjatemconta">Se lembrou?<a class="linksdownbotao" href="login.php"> Retorne para tela de login.</a></p>
      </div>
      </div>
    </div>
  </body>
</html>