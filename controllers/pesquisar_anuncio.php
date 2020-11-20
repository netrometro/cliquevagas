<?php
require('../model/persistency/db.php');
$pesquisa = $_POST['pesquisa'];
if (!isset($_POST) or $_POST['pesquisa'] == "") {
  header("Location: ../pesquisa.php");
}
$sql = 'SELECT * FROM anuncio WHERE precisase LIKE "%' . $pesquisa . '%";';
$resultado = banco($sql);
session_start();
$_SESSION['resultado'] = $resultado;
header("Location: ../pesquisa.php");
?>