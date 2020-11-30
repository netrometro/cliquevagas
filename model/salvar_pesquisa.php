<?php
require('persistency/db.php');
if (isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['busca']) && $_POST['busca'] != "" ) {
    $email = pg_escape_string($_POST['email']);
    $busca = pg_escape_string($_POST['busca']);
    
   
if($resultado){
    $sql = "UPDATE favbusca WHERE email='" . $email . "' SET buscaFavorita='" . $busca . "'" ;
}else{
    $sql = "INSERT INTO favbusca VALUES (email, buscaFavorita) " ;
}
$resultado = banco($sql);
}
// Verfica se recebe email e pesquisa
// Procura no banco o email
// se achar
//    update (atualiza) o email encontrado com a nova busca
// senão achar 
//    insert email e busca
header("Location: ../pesquisa_salva.html");
?>