<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/login.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
        <a href="index.php"> <img   src="images/logo.png" /></a>
      <a class="limpartitulo" href="index.php">Clique Vagas Caruaru</a>
      </div>
      <div class="conteudo">
        <div class="tema">
          <h2 class="tituloconta">Entre com sua conta</h2>
          <h4 class="temasub">O melhor profissional vai até você.</h4>
        </div>

        <div class="formulario">
          <form action="controllers/login.php" method="POST">
              <p class="nameemail">E-mail:</p>
              <input name="email" class="caixaemail" type="email" placeholder="Digite o email da empresa" />
              <p class="namesenha">Senha:</p>
              <input name="senha" class="caixasenha" type="password" placeholder="Digite a senha da empresa" minlength="8" />
              <button class="botaoconfirma" type="submit">Entrar</button>
          </form>
        </div>

        <div>
          <p class="textodownbotao">Esqueceu sua senha?<br /><a class="linksdownbotao" href="recuperar.php">Clique aqui para recuperar.</a></p>
          <p class="pjatemconta">Não possui conta?<br /><a class="linksdownbotao" href="empresa.html"> Clique aqui para se cadastrar.</a></p>
        </div>

      </div>
    </div>
  </body>
</html>