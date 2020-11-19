<?php
    require('db.php');
    function listarUsuarios() {
        $conn = banco();
        $sql = "USE anuncios;";
        $resultado = pg_query($conn, $sql);
        if (!$resultado)
            die ("Erro: Seleção database... " . pg_last_error($conn). "<br />");
            $sql = "SELECT * FROM precisase"; /*  */
        $resultado = pg_query($conn, $sql);
        if (!$resultado)
            die ("Erro: Seleção database... " . pg_last_error($conn). "<br />");
        pg_close($conn);
        return $resultado;
    }
?>