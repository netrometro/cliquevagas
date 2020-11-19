<?php
session_start();

if (isset($_SESSION['resultado']) and $_SESSION['resultado'] != "") {
  $resultado = $_SESSION['resultado'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="pesquisa.css" />
  </head>
  <body class="bg2">
    <div class="modal">
      <div class="janela">
        <div class="titulomodal bg1">Salvar pesquisa</div>
        <div class="conteudo"><p>Cadastre seu e-mail que lhe enviaremos uma oportunidade assim que ela for cadastrada.</p></div>
        <div class="formsalvarpesquisa">
          <form action="controllers/pesquisar_anuncio.php" method="post">
            <input class="digiteemail" type="text" placeholder="Digite seu e-mail" />
            <button class="botaocancelar" type="button" onclick="cancel()">Cancelar</button>
            <input class="botaosalvar" type="submit" value="Salvar pesquisa" />
          </form>
        </div>
      </div>
    </div>
    <header>
    <div class="titulo bg1"><img src="images/logo.png" /> Click Vagas Caruaru</div>  
    <div class="armario">
      <div class="gaveta">
        <form action='#' method='post'>
          <div class="caixatexto">
            <input type="text" placeholder="Procure sua vaga" />
            <button type="button" onclick="modal()"><i class="material-icons">grade</i></button>
          </div>
        </form>
      </div>
    </div>
    </header>
    
    <div class="container card">
      <h3>SENAC</h3>

      <h4>Auxiliar de Eletricista, Instalador Fotovoltáico.</h4>

      <p>Auxiliar de eletricista experiência de 1 ano, ter curso
        de eletricista predial e disponibilidade para trabalhar
        durante a madrugada.<br/>
        Instador fotovotáico, curso de eletrotécnica e 
        experiência de 2 anos.</p>

      <p>Enviar currículo para eletrica220v.caruaru@gmail.com</p>

    </div>

<?php
if (isset($resultado)) {
  while ($dados = pg_fetch_array($resultado))
?>
    <div class="container card">
      <h3><?= $dados['empresa'] . ?></h3>
      <h4><?= $dados['precisase'] . ?></h4>
      <p><?= $dados['descricao'] . ?></p>
      <p><strong>Contato:</strong></p>
      <p><?= $dados['telefone'] . ?></p>
      <p><?= $dados['endereco'] . ?></p>
      <p><?= $dados['email'] . ?></p>

    </div>
    <? pg_close($conn); ?>
    <?  return $resultado; ?>
<?php } ?>
    <script src="pesquisa.js"></script>
  </body>
</html>