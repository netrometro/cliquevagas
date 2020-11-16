<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("db.php");
/* DELETAR TABELA CASO EXISTER usuario */
banco("DROP TABLE IF EXISTS usuario");
/* PRINTAR SE A TABELA FOI APAGADA */
echo "<p>Tabela usuário apagada com sucesso !</p>";
/* CRIAR TABELA E POPULAR COM VALORES */
$sql ="CREATE TABLE usuario(";
$sql .= "codigo SERIAL NOT NULL,";
$sql .= "nome VARCHAR(250),";
$sql .= "email VARCHAR(100),";
$sql .= "senha VARCHAR(150,";
$sql .= "PRIMARY KEY(codigo)";
$sql .= ");";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO */
banco($sql);
echo "<p>Tabela usuário criada com sucesso !</p>";
$sql = "INSERT INTO usuario (nome, email, senha) ";
$sql .= "VALUES ('Fulano de Tal', 'fulano@email.com', '1');";
$sql .= "INSERT INTO usuario (nome, email, senha) ";
$sql .= "VALUES ('Cicrano da Silva', 'cicrano@email.com', '2');";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO E POPULANDO A TABELA */
banco($sql);
echo "<p>Tabela usuário populada com sucesso ! </p>";
?>