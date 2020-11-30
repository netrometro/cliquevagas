<?php
require('persistency/db.php');

if (isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['pesquisa']) && $_POST['pesquisa'] != "" ) {
    $email = pg_escape_string($_POST['email']);
    $pesquisa = pg_escape_string($_POST['pesquisa']);

    // tem que fazer uma busca aqui
    $sql = "SELECT * FROM favbusca WHERE email='" . $email . "' AND buscaFavorita='" . $pesquisa . "'" ;
    
    $resultado = banco($sql);

    if($resultado){
        $sql = "UPDATE favbusca SET buscaFavorita='" . $pesquisa . "' WHERE email='" . $email . "' ";
    }else {
        $sql = "INSERT INTO favbusca (email, buscaFavorita) VALUES ('" . $email . "', '" . $pesquisa . "')" ;
    }
    
    $resultado = banco($sql);
}
header("Location: ../pesquisa_salva.html");
?>