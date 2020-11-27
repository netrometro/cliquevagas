<?php
require('persistency/db.php');



echo "Salvar pesquisa";
echo $_POST['email'];
echo $_POST['pesquisa'];

// Verfica se recebe email e pesquisa
// Procura no banco o email
// se achar
//    update (atualiza) o email encontrado com a nova busca
// senão achar
//    insert email e busca

header("Location: ../pesquisa_salva.html");
?>