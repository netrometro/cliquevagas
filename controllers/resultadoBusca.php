<?php 
    include ("db.php");
    $buscar = $_POST['busca'];
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Resultados:</h3>
 <hr>
 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="3" style='width:100%'>
 <tr>
 <th>Precisa-se</th>
 <th>Descrição</th>
 <th>Email</th>
 <th>Telefone</th>
 <th>Endereço</th>
 </tr>

 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM anuncios WHERE descricao LIKE '%".$busca."%'"
 $resultado = ($conn,$sql) or die("Erro ao retornar dados");

 // Obtendo os dados por meio de um loop while
 while ($registro = pg_fetch_array($resultado))
 {
   $precisase = $registro['precisase'];
   $descricao = $registro['descricao'];
   $email = $registro['email'];
   $telefone = $registro['telefone'];
   $endereco = $registro['endereco'];
   echo "<tr>";
   echo "<td>".$precisase."</td>";
   echo "<td>".$descricao."</td>";
   echo "<td>".$email."</td>";
   echo "<td>".$telefone."</td>";
   echo "<td>".$endereco."</td>";
   echo "</tr>";
 }
 pg_close($conn);
 echo "</table>";
?>

    
</body>
</html>

