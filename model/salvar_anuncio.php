<?php
require("../controllers/autentication.php");
require("persistency/db.php");
//print_r($_POST);
// verifica se foram enviados os post
if (isset($_POST['precisase']) && $_POST['precisase'] != "" ) {
    $precisase = pg_escape_string($_POST['precisase']);
    $descricao = pg_escape_string($_POST['descricao']);
    $telefone = pg_escape_string($_POST['telefone']);
    $email = pg_escape_string($_POST['email']);
    $site = pg_escape_string($_POST['site']);
    $endereco = pg_escape_string($_POST['endereco']);
    $dias = pg_escape_string($_POST['dias']);

    $datainsercao = date("Y/m/d");
    $datavencimento = date('Y/m/d', strtotime($datainsercao . ' + ' . $dias .' days'));

    $codigoempresa = $_SESSION['usuario'];
   
   $sql ="INSERT INTO anuncios (codigo_empresa, precisase, descricao, telefone, email, site, endereco, data_insercao, data_vencimento) ";
   $sql .="VALUES ($codigoempresa, '$precisase', '$descricao', '$telefone', '$email', '$site', '$endereco', '$datainsercao', '$datavencimento');";
   $resultado = banco($sql);

    // faz uma pesquisa em favbusca para todos os e-mail que salvaram a busca (%LIKE%)
    // Apenas, se tiver ao menos um resultado faz...
    // Entra em um laço de repetição
    // Envia um e-mail para cada e-mail do resultado

   header("Location: ../perfil.php");
} else
    header("Location: ../erroformulario.html");
?>