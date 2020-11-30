<?php
require("../model/persistency/db.php");
if (isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['senha']) && $_POST['senha'] != "" ) {
    //*//
    $email = pg_escape_string($_POST['email']);
    $senha = pg_escape_string($_POST['senha']);
    //*/
    $sql = "SELECT * FROM empresa WHERE email='" . $email . "' AND senha='" .$senha . "'";
    $resultado = banco($sql);
    //$sql ="SELECT email, senha FROM empresa WHERE usuario = '" .$email . "' AND senha = '" .$senha ."') AND ('ativo' = 1) LIMIT 1";
    //banco($sql);
    if (pg_num_rows($resultado) != 1) {
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
        echo "Login inválido!"; exit;
    } else {
      // Salva os dados encontados na variável $resultado
      $resultado = pg_fetch_assoc($resultado);
       // Se a sessão não existir, inicia uma
       if (!isset($_SESSION)) {
            session_start();
            // Salva os dados encontrados na sessão
             $_SESSION['usuario'] = $resultado['codigo'];
       }
       // Redireciona o visitante
       header("Location: perfil.php"); exit;
  }
}else{
    header("Location: ../error/login.html"); 
}
// RECEBE O $_POST
// vERIFICA
// PROCURA NO BANCO
// SE EXISTIR 
//    REGISTRA NA SESSION O EMAIL
//    DIRECIONA PARA O PERFIL.PHP
// SENÃO 
//    DIRECIONA PARA A PÁGINA ERROR_LOGIN.HTML
?>