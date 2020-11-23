<?php
require('../model/persistency/db.php');
if (!isset($_POST) or $_POST['pesquisa'] == "") {
  header("Location: ../pesquisa.php");
}
$pesquisa = $_POST['pesquisa'];
$sql = 'SELECT * FROM anuncios WHERE precisase LIKE "%'.$pesquisa.'%";';
$resultado = banco($sql);
session_start();
$_SESSION['resultado'] = $resultado;
header("Location: ../pesquisa.php");
?>