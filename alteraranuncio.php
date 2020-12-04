<?php 
require("controllers/autentication.php");
require("model/persistency/db.php");

$sql = "SELECT * FROM anuncios WHERE codigo= " . $_GET['anuncio'];
$resultado = banco($sql);
$resultado = pg_fetch_assoc($resultado);
$precisase = $resultado['precisase'];
$descricao = $resultado['descricao'];
$telefone = $resultado['telefone'];
$email = $resultado['email'];
$site = $resultado['site'];
$endereco = $resultado['endereco'];

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/adicionaranuncio.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
      <a href="index.php"> <img   src="images/logo.png" /></a>
      <a class="limpartitulo" href="index.php"> Click Vagas Caruaru</a>
      </div>
      <div class="conteudo">
        <h3>Criar anúncio:</h3>
        <form>
          <p>Precisa-se:</p>
          <input class="caixaprecisase" type="text" value="<?php $precisase ?>"/>
          <p>Descrição da vaga: <p id="max">(Max: 140 caracteres)</p></p>
          <textarea class="caixadescricao" maxlength="140" type="text" method="POST" value="<?php $descricao ?>"></textarea>
          <h4>Contatos:</h4>
          <p>Telefone:</p>
          <input class="caixatelefone" type="tel" id="telefone" maxlength="15" onkeypress="mascara(this)"  value="<?php $telefone ?>" />
          <p>E-mail:</p>
          <input class="caixaemail" type="email" method="POST" value="<?php $email ?>" />
          <p>Site:</p>
          <input class="caixasite" type="url" method="POST" value="<?php $site ?>" />
          <p>Endereço da empresa:</p>
          <input class="caixaendereco" type="text" method="POST" value="<?php $endereco ?>" />
          <h4>Tempo de anúncio:</h4>
          <div class="slidecontainer">
            <input type="range" min="1" max="30" value="30" class="slider" id="myRange">
            <p>Dias: <span id="demo"></span></p>
          </div>
          <div class="botoes">
          <a class="botaocancelar" type="button" href="perfil.php">Cancelar</button>
          <input class="botaopostar" type="submit" value="Salvar anúncio" />
          </div>
        </form>
      </div>
    </div>
    <script src="js/adicionaranuncio.js"></script>
  </body>
</html>