<?php
$busca = false;
if (isset($_POST['busca']) && $_POST['busca'] != "") {
  $busca = true;
}
require("model/pesquisar_anuncio.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/index.css" />
    <link rel="stylesheet" href="style/modal.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
        <a class="limpartitulo" href="index.php"> <img src="images/logo.png" /> Click Vagas Caruaru</a>
      </div>
      <div class="conteudo">
        <div class="menu" <?= ($busca) ? 'style="display:none"' : "" ?> >
          <a class="botao bg3" href="login.php">Entrar como empresa</a>
          <a class="botao bg4" href="empresa.html">Cadastrar empresa</a>
        </div>
        <div class="pesquisa">
          <p class="mensagem">Encontre uma oportunidade de emprego.</p>
          <form action="index.php" method="post">
            <div class="caixatexto">
              <input name="busca" type="text" placeholder="Procure sua vaga" />
              <button type="submit"><i class="material-icons">search</i></button>
            </div>
          </form>
          <a onClick="salvar()" <?= ($busca) ? 'style="display:block"' : "" ?> class="botao bg4 salvar">Salvar pesquisa</a>
        </div>
        <div class="resultado">
          <p class="mensagem">Vagas <?= $vagas ?></p>
<?php while ($row = pg_fetch_assoc($resultado)) { ?>
          <div class="container card">
            <div class="empresaedata">
              <div class="nomeempresa">
                <h3>......</h3>
              </div> 
              <div class="datavencimento">             
                <p>Vencimento <?= $row['data_vencimento'] ?></p>
              </div>
            </div>
            <h4><?= $row['precisase'] ?></h4>           
            <p><?= $row['descricao'] ?></p>
            <p><strong>Contato:</strong></p>    
            <p>caruaru@gmail.com</p>
            <p>site</p>
            <p>telefone</p>
            <p>endereço</p>
          </div>
<?php } ?>
        </div>
      </div>
      <div id="modal" class="modal">
        <div class="janela">
          <div class="titulomodal bg1">Salvar pesquisa</div>
          <div class="conteudo"><p>Cadastre seu e-mail que lhe enviaremos uma oportunidade assim que ela for cadastrada.</p></div>
          <div class="formsalvarpesquisa">
            <form action="model/salvar_pesquisa.php" method="post">
              <input class="digiteemail" name="email" type="text" placeholder="Digite seu e-mail" />
              <input type="hidden" name="pesquisa" value="<?= ($busca) ? $_POST['busca'] : '' ?>" />
              <button class="botaocancelar" type="button" onclick="cancel()">Cancelar</button>
              <input class="botaosalvar" type="submit" value="Salvar pesquisa" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
    function salvar() {
      document.getElementById('modal').style = "display: block";
    }
    function cancel() {
      document.getElementById('modal').style = "display: none";
    }
    </script>
  </body>
</html>
