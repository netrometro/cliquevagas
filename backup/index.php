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
    <link rel="stylesheet" href="styles/style.css" />
  </head>
  <body class="bg2">

    <a href="controllers/install.php">Clique aqui para "ligar o banco"</a>

    <header>
    <div class="titulo bg1"><img src="images/logo.png" /> Click Vagas Caruaru</div>  
    <div class="armario">
      <div class="gaveta">
        <p class="mensagem">Encontre uma oportunidade de emprego.</p>
      </div>
      <div class="gaveta">
        <form action='controllers/pesquisa_anuncio.php' method='post'>
          <div class="caixatexto">
            <input name="busca" type="text" placeholder="Procure sua vaga" />
            <button type="submit"><i class="material-icons">search</i></button>
          </div>
        </form>
      </div>

<?php
if (isset($resultado)) { ?>
      <div class="gaveta">
        <a class="botao bg3" href="#">Entrar como empresa</a>
        <a class="botao bg4" href="html/cadastrarempresa.php">Cadastrar empresa</a>
      </div>
<?php } else { ?>

  <div class="container card">
      <h3>SENAC</h3>

      <h4>Auxiliar de Eletricista, Instalador Fotovoltáico.</h4>

      <p>Auxiliar de eletricista experiência de 1 ano, ter curso de eletricista predial e disponibilidade para trabalhar durante a madrugada. Instador fotovotáico, curso de eletrotécnica e experiência de 2 anos.</p>

      <p><strong>Contato<strong></p>
      <p>site<br />
      eletrica220v.caruaru@gmail.com<br />
      Endereço<br />
      Telefone</p>

    </div>

<?php } ?>
    </div>
    </header>
  </body>
</html>