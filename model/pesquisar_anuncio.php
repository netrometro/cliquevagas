<?php
require("persistency/db.php");

if (!isset($_POST['busca']) || $_POST['busca'] == "") {
  // Se não tem busca, retorna todos os anuncios
  $sql = "SELECT * FROM anuncios INNER JOIN empresa ON empresa.codigo = codigo_empresa WHERE data_vencimento > TIMESTAMP 'yesterday' ORDER BY data_insercao ASC";
} else {
  // Se tiver busca, faz a pesquisa
  $sql = "SELECT * FROM anuncios INNER JOIN empresa ON empresa.codigo = codigo_empresa WHERE precisase ILIKE '%" . $_POST["busca"] . "%' AND data_vencimento > TIMESTAMP 'yesterday' ORDER BY data_insercao ASC";
}

$resultado = banco($sql);

$vagas = pg_num_rows($resultado);

/*
while ($row = pg_fetch_row($resultado)) {
  echo "Author: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}
*/
//header("Location: ../index.php");
?>