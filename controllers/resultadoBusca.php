<?php 
   require('DAOUsuario.php');
   $res = listarUsuarios();
    /* 
    $buscar = $_POST['busca'];
    $sql = "SELECT * FROM anuncios WHERE precisase LIKE '%".$busca."%'";
    $resultado = pg_query($conn, $sql);
    if (!$resultado)
    die ("Erro ao retornar dado. < /br>");
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
    return $resultado;
    echo "</table>";
     */


    ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th class="white-text">
                    <i class="small material-icons">published_with_changes</i>
                    Precisa-se</th>
                <th class="white-text">
                    <i class="small material-icons">insert_chart</i>
                    Descrição</th>
                <th class="white-text">
                    <i class="small material-icons">account_circle</i>
                    Email</th>
                <th class="white-text">
                    <i class="small material-icons">email</i>
                    Telefone</th>
                <th class="white-text">
                    <i class="small material-icons">email</i>
                    Endereço</th>
                <th class="white-text">
                    <i class="small material-icons">backspace</i>
                    Apagar</th>
            </tr>
            <?php while($linha = pg_fetch_array($res)) { ?>
            <tr>
                <td>
                    <a
                        class="waves-effect waves-light btn"
                        href="AlterarUsuario.php?codigo=<?= $linha['codigo'] ?> ">
                        <i class="material-icons left">add_circle_outline</i>Alterar</button>
                </td>
                <td class="white-text"><?= $linha['precisase'] ?></td>
                <td class="white-text"><?= $linha['descricao'] ?></td>
                <td class="white-text"><?= $linha['email'] ?></td>
                <td class="white-text"><?= $linha['telefone'] ?></td>
                <td class="white-text"><?= $linha['endereco'] ?></td>
                <td>
                    <a
                        class="waves-effect waves-light btn"
                        href="ExcluirUsuario.php?codigo=<?= $linha['codigo'] ?> ">
                        <i class="material-icons left">delete</i>Excluir</button>
                </td>

            </tr>
            <?php  } ?>
        </table>
    </body>
</html>