<?php
require('persistency/db.php');
$email = pg_escape_string($_POST['email']);
$pesquisa = pg_escape_string($_POST['pesquisa']);
if (isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['pesquisa']) && $_POST['pesquisa'] != "" ) {
    $sql = "SELECT * FROM favbusca WHERE email = '" . $_POST["email"] . "'";
    echo $sql;
    $resultado = banco($sql);
    if(pg_num_rows($resultado) > 0){
        $sql = "UPDATE favbusca SET buscaFavorita = '$pesquisa' WHERE email = '$email';" ;
        echo $sql;
        $resultado = banco($sql);
        header("Location: ../pesquisa_salva.html");     
    } else {
        $sql = "INSERT INTO favbusca (email, buscaFavorita) VALUES ('$email', '$pesquisa')" ;
        echo $sql;
        $resultado = banco($sql);
        header("Location: ../pesquisa_salva.html");
    }
} else {
    echo "<p>Erro !</p>";
}
?>