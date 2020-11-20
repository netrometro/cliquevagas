<?php
require('../model/persistency/db.php');


$pesquisa = $_POST['pesquisa'];
$sql = 'SELECT * FROM anuncio WHERE precisase LIKE "%".$pesquisa."%"';
$resultado = banco($sql);

if (!isset($_POST) or $_POST['pesquisa'] == "") {
  header("Location: ../pesquisa.php");
}


session_start();
$_SESSION['resultado'] = $resultado;

header("Location: ../pesquisa.php");
?>