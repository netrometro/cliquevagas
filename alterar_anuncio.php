<?php 
require("controllers/autentication.php");

if (isset($_GET['codigo']) && $_GET['codigo'] != "") {
  require("model/persistency/db.php");


  $codigo = pg_escape_string($_GET['codigo']);
  $sql = "SELECT * FROM anuncios WHERE codigo=$codigo ";
  $resultado = banco($sql);

  if (pg_num_rows($resultado) > 0) {
    $resultado = pg_fetch_assoc($resultado);
    $codigo = $resultado['codigo'];
    $precisase = $resultado['precisase'];
    $descricao = $resultado['descricao'];
    $telefone = $resultado['telefone'];
    $email = $resultado['email'];
    $site = $resultado['site'];
    $endereco = $resultado['endereco'];

  } else {
    header('Location: ../erro_anuncio_nao_encontrado.html');
  }
} else {
  header('Location: ../erro_geral.html');
}
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
      <a class="limpartitulo" href="index.php"> Clique Vagas Caruaru</a>
      </div>
      <div class="conteudo">
        <h3>Criar anúncio:</h3>
        <form method='POST' action="model/alterar_anuncio.php">
          <input  type="hidden" name="codigo" value="<?= $codigo ?>" />
          <p>Precisa-se:</p>
          <input class="caixaprecisase" name="precisase" type="text" value="<?= $precisase ?>"/>
          <p>Descrição da vaga: <p id="max">(Max: 400 caracteres)</p>
          <textarea class="caixadescricao" name="descrisao" maxlength="400" type="text" style="height:auto!important" rows="10" value="<?= $descricao ?>"></textarea>
          <h4>Contatos:</h4>
          <p>Telefone:</p>
          <input class="caixatelefone" name="telefone" type="tel" id="telefone" maxlength="15" onkeypress="mascara(this)"  value="<?= $telefone ?>" />
          <p>E-mail:</p>
          <input class="caixaemail" type="email" name="email" value="<?= $email ?>" />
          <p>Site:</p>
          <input class="caixasite" type="text" name="site" value="<?= $site ?>" />
          <p>Endereço da empresa:</p>
          <input class="caixaendereco" type="text" name="endereco" value="<?= $endereco ?>" />
          <h4>Tempo de anúncio:</h4>
          <div class="slidecontainer">
            <input type="range" name="dias" min="1" max="30" value="30" class="slider" id="myRange">
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