<?php
//putenv("DATABASE_URL=host=localhost port=5432 dbname=postgres");
//echo getenv("DATABASE_URL");

/* CONEXÃO DE BANCO SQL */
function banco($sql){
  /* ESTABELECENDO CONEXÃO UTILIZANDO VARIÁVEIS DE AMBIENTE */
  $conn = pg_connect(getenv("DATABASE_URL"));
  if (!$conn)
    die ("Erro conexão com o banco.");
  /* ESTABELECENDO RESULTADO PARA CONEXÃO EM CASO DE ERRO */
  $resultado = pg_query($conn, $sql);
  if (!$resultado)
    die ("Erro de conexão com o SQL.");
  /* FECHANDO CONEXÃO E RETORNANDO RESULTADO */
  pg_close($conn);
  
  return $resultado;
}
?>