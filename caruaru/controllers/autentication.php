<?php
session_start();
if(!isset($_SESSION['usuario']) || $_SESSION['usuario'] == '' ){  
    header("Location: erro_entrada_nao_autorizada.html");
}
?>