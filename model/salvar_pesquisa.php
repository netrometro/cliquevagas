<?php
require('persistency/db.php');
$email = pg_escape_string($_POST['email']);
$pesquisa = pg_escape_string($_POST['pesquisa']);
if (isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['pesquisa']) && $_POST['pesquisa'] != "" ) {
     $sql = "SELECT * FROM favbusca WHERE email='" . $email . "' AND buscaFavorita='" . $pesquisa . "'" ;
     $sql = "UPDATE IF EXISTS email='" . $email . "' AND buscaFavorita='" . $pesquisa . "'"; 
     $resultado = banco($sql);
    if($resultado){
        $sql = "INSERT INTO favbusca (email, buscaFavorita) VALUES ('" . $email . "', '" . $pesquisa . "')" ;
        header("Location: ../pesquisa_salva.html");
   }else {
    echo "<p>Erro ! </p>";
    }
    $resultado = banco($sql);
}
?>