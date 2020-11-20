<?php
if (!isset($_POST['busca']) && $_POST['busca'] == "") {
  $busca = false;
} else {
  $busca = true;

  require('model/pesquisa_anuncio.php');
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
        <img src="images/logo.png" /> 
        Click Vagas Caruaru
      </div>

      <div class="conteudo">
        <div class="menu" <?= ($busca) ? 'style="display:none"' : "" ?> >
          <a class="botao bg3" href="login.html">Entrar como empresa</a>
          <a class="botao bg4" href="empresa.html">Cadastrar empresa</a>
        </div>

        <div class="pesquisa">
          <p class="mensagem">Encontre uma oportunidade de emprego.</p>

          <form action="#" method="post">
            <div class="caixatexto">
              <input name="busca" type="text" placeholder="Procure sua vaga" />
              <button type="submit"><i class="material-icons">search</i></button>
            </div>
          </form>

          <a <?= ($busca) ? 'style="display:block"' : "" ?> class="botao bg4 salvar" href="empresa.html">Salvar pesquisa</a>

        </div>

        <div class="resultado">
          <p class="mensagem">Vagas 000</p>

          <div class="container card">
            <p>Vencimento dia 27/12/2020</p>
            <h3>SENAC</h3>

            <h4>Auxiliar de Eletricista, Instalador Fotovoltáico.</h4>

            <p>Auxiliar de eletricista experiência de 1 ano, ter curso
              de eletricista predial e disponibilidade para trabalhar
              durante a madrugada.<br/>
              Instador fotovotáico, curso de eletrotécnica e 
              experiência de 2 anos.</p>

            <p><strong>Contato:</strong></p>
            
            <p>caruaru@gmail.com</p>
            <p>site</p>
            <p>telefone</p>
            <p>endereço</p>

          </div>
        </div>


      </div>

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

    </div>
  </body>
</html>