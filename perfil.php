<?php 
require("controllers/autentication.php");

require("model/persistency/db.php");

$sql = "SELECT nome FROM empresa WHERE codigo=" . $_SESSION['usuario'];
$resultado = banco($sql);
$resultado = pg_fetch_assoc($resultado);
$empresa = $resultado['nome'];

$sql = "SELECT * FROM anuncio WHERE codigo_empresa=" . $_SESSION['usuario'];
$resultado = banco($sql);
//$resultado = pg_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style/principal.css" />
    <link rel="stylesheet" href="style/botoes.css" />
    <link rel="stylesheet" href="style/card.css" />
  </head>
  <body class="bg2">
    <div class="container">
      <div class="titulo bg1">
      <a href="index.php"> <img   src="images/logo.png" /></a>
      <a class="limpartitulo" href="index.php"> Click Vagas Caruaru</a>
      </div>
      <div class="conteudo">
      <h3 class="empresa"><?= $empresa ?></h3>
      <a class="bt_principal" href="adicionaranuncio.php">Anunciar</a>
      
      <div class="resultado">

<?php while ($row = pg_fetch_assoc($resultado)) { 
 $inativo = false;
 // Verifica a data de vencimento, se for menor que a data de hoje $inativo = true
?>

          <div class="card  <?= ($inativo) ? 'inativo' : '' ?>">
            <div class="col c1">
              <a href="#"><i class="material-icons">edit</i></a>
            </div>
            <div class="col c2">
              <p><?= $row['precisase'] ?></p>
              <p><?= $row['data_vencimento'] ?></p>
              <p><?= $row['descricao'] ?></p>
              <p><strong>Contato:</strong></p>
              <p><?= $row['email'] ?></p>
              <p><?= $row['site'] ?></p>
              <p><?= $row['telefone'] ?></p>
              <p><?= $row['endereco'] ?></p>
            </div>
            <div class="col c3">
              <a href="#"><i class="material-icons">cancel</i></a>
            </div>
          </div>
<?php } ?>

          <div class="card inativo">
            <div class="col c1">
              <a href="model/cancelar_anuncio.php?codigo=  <?= 1 ?>"><i class="material-icons">edit</i></a>
            </div>
            <div class="col c2">
              <p>SENAC</p>
              <p>27/11/2020</p>
              <p>Descrição...</p>
              <p><strong>Contato:</strong></p>
              <p>caruaru@gmail.com</p>
              <p>site</p>
              <p>telefone</p>
              <p>endereço</p>
            </div>
            <div class="col c3">
              <a href="#"><i class="material-icons">cancel</i></a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </body>
</html>