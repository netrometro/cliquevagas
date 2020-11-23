<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="cadastrarempresa.css" />
  </head>
  <body class="bg2">
    <header>
    <div class="titulo bg1"><img src="images/logo.png" /> Click Vagas Caruaru</div>  
    </header>

    <div class="tema">
        <h2 class="tituloconta">Crie sua conta</h2>
        <h4 class="temasub">Divulgue sua vaga rápido e fácil.</h4>
    </div>

    <div class="formulario">
    <form>
        <p>Nome:</p>
        <input class="caixanome" type="text" method="POST" />
        <p>E-mail:</p>
        <input class="caixaemail" type="email" method="POST" />
        <p>Senha:</p>
        <input class="caixasenha" type="password" method="POST" />
        <p class="textosenha">Use 8 ou mais caracteres para sua senha, faça uma mistura de letras, números & símbolos.</p>
    </form>
    </div>

    <div>
      <button class="botaoconfirma" type="submit">Vamos começar a divulgar</button>
      <p class="textodownbotao">Ao se cadastrar, você está concordando com os <a class="linksdownbotao" href="#">Termos de Uso</a> 
        Clique Vagas Caruaru e <a class="linksdownbotao" href="#">Políticas de Privacidade.</a></p>
      <p class="pjatemconta">Já possui conta?<a class="linksdownbotao" href="#"> Clique aqui para se logar!</a></p>
    </div>

  </body>
</html>