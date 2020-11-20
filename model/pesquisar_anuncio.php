<?php
require('persistency/db.php');

if (!isset($_POST['busca']) && $_POST['busca'] == "") {
  // Se não tem busca, retorna todos os anuncios
  $sql = 'SELECT * FROM anuncios;';
} else {
  // Se tiver busca, faz a pesquisa
  $sql = 'SELECT * FROM anuncios WHERE precisase LIKE "%' . $_POST['busca'] . '%";';
}

$resultado = banco($sql);

print_r($resultado);

//header("Location: ../index.php");
?>