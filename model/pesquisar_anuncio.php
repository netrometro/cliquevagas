<?php
require('persistency/db.php');

if (!isset($_POST['busca']) && $_POST['busca'] == "") {
  // Se não tem busca, retorna todos os anuncios
  $sql = 'SELECT * FROM anuncios';
} else {
  // Se tiver busca, faz a pesquisa
  $sql = "SELECT * FROM anuncios WHERE precisase LIKE '%" . $_POST["busca"] . "%'";
}

$resultado = banco($sql);

echo "teste";
print_r($resultado);

while ($row = pg_fetch_row($resultado)) {
  echo "Author: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}
//header("Location: ../index.php");
?>