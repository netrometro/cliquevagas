<?php
require("controllers/autentication.php");

// verifica se foram enviados os post
if (isset($_POST['precisase']) && $_POST['precisase'] != "" ) {
    $precisase = pg_escape_string($_POST['precisase']);
    $descricao = pg_escape_string($_POST['descricao']);
    $telefone = pg_escape_string($_POST['telefone']);
    $email = pg_escape_string($_POST['email']);
    $endereco = pg_escape_string($_POST['endereco']);
    $datainsercao = pg_escape_string($_POST['data_insercao']);
    $datavencimento = pg_escape_string($_POST['data_vencimento']);

    session_start();
    $codigoempresa = $_SESSION['usuario'];
   
   $sql ="INSERT INTO anuncios (codigo_empresa, precisase, descricao, telefone, email, endereco, data_insercao, data_vencimento) ";
   $sql .="VALUES ($codigoempresa, '$precisase', '$descricao', '$telefone', '$email', '$endereco', '$datainsercao', '$datavencimento');";
   $resultado = banco($sql);

   header("Location: ../perfil.php");

}

header("Location: ../erroformulario.html");

?>