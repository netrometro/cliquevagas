<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/empresa.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
        <img src="images/logo.png" /> 
        Click Vagas Caruaru
      </div>
      <div class="conteudo">
        <div class="tema">
          <h2 class="tituloconta">Crie sua conta</h2>
          <h4 class="temasub">Divulgue sua vaga rápido e fácil.</h4>
      </div>
  
      <div class="formulario">
      <form method="POST" action="model/cadastrar_empresa.php">
          <p>Nome da empresa.:</p>
          <input class="caixanome" type="text" name="nome" placeholder="Digite o nome da sua empresa" />
          <p>E-mail:</p>
          <input class="caixaemail" type="email" name="email" placeholder="Digite o e-mail da sua empresa" />
          <p>Senha:</p>
          <input class="caixasenha" type="password" name="senha" placeholder="Digite a senha da sua empresa" />
          <p class="textosenha">Use 8 ou mais caracteres para sua senha, faça uma mistura de letras, números & símbolos.</p>
          <button class="botaoconfirma" type="submit" >Vamos começar a divulgar</button>
      </form>
      </div>
      <div>
        <p class="textodownbotao">Ao se cadastrar, você está concordando com os <a class="linksdownbotao" href="#">Termos de Uso</a> 
          <br/> Clique Vagas Caruaru e <a class="linksdownbotao" href="#">Políticas de Privacidade.</a></p>
        <p class="pjatemconta">Já possui conta?<a class="linksdownbotao" href="#"> Clique aqui para se logar!</a></p>
      </div>
  
      </div>
    </div>
  </body>
</html>