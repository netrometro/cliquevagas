<?php
$busca = false;
if (isset($_POST['busca']) && $_POST['busca'] != "") {
  $busca = true;
}
require("model/pesquisar_anuncio.php");

session_start();
$sessao = false;
if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != "" ){  
  $sessao = true;
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
    <link rel="stylesheet" href="style/index.css" />
    <link rel="stylesheet" href="style/modal.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
        <a class="limpartitulo" href="index.php"> <img src="images/logo.png" /> Click Vagas Caruaru</a>
      </div>
      <div class="conteudo">
      <a class="botao bg3" <?= ($sessao) ? 'style="display:block"' : 'style="display:none"'  ?> href="perfil.php">Entrar no perfil da empresa</a>
        <div class="menu" <?= ($busca || $sessao) ? 'style="display:none"' : "" ?> >
          <a class="botao bg3" href="login.php">Entrar como empresa</a>
          <a class="botao bg4" href="empresa.html">Cadastrar empresa</a>

        </div>
        <div class="pesquisa">
          <p class="mensagem">Encontre uma oportunidade de emprego.</p>
          <form action="index.php" method="post">
            <div class="caixatexto">
              <input name="busca" type="text" placeholder="Procure sua vaga" value="<?= ($busca) ? $_POST["busca"] : '' ?>" />
              <button type="submit"><i class="material-icons">search</i></button>
            </div>
          </form>
          <a onClick="salvar()" <?= ($busca) ? 'style="display:block"' : "" ?> class="botao bg4 salvar">Salvar pesquisa</a>
        </div>
        <div class="resultado">
          <p class="mensagem">Vagas <?= $vagas ?></p>
<?php while ($row = pg_fetch_assoc($resultado)) { ?>
          <div class="container card">
          <div class="precisaseclasse">
          <h3><?= strtoupper($row['precisase']) ?></h3>  
          </div>
            <div class="empresaedata">
              <div class="nomeempresa">
                <h4><?= $row['nome'] ?></h4>
              </div> 
              <div class="datavencimento"> 
<?php
$date = date_create($row['data_vencimento']);
$date = date_format($date, 'd-m-Y');
?>            
            <p><?= $row['descricao'] ?></p>
                <p>Vencimento <?= $date ?></p>
              </div>
            </div>
            <p><strong>Contato:</strong></p>    
            <p><?= $row['email'] ?></p>
            <p><?= $row['site'] ?></p>
            <p><?= $row['telefone'] ?></p>
            <p><?= $row['endereco'] ?></p>
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
              <input class="digiteemail" name="email" type="email" placeholder="Digite seu e-mail (Obrigatório)" required/>
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
