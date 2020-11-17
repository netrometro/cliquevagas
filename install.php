<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("db.php");
/* DELETAR TABELA CASO EXISTER empresa */
banco("DROP TABLE IF EXISTS empresa");
/* PRINTAR SE A TABELA FOI APAGADA */
echo "<p>Tabela Empresa apagada com sucesso !</p>";
/* CRIAR TABELA E POPULAR COM VALORES */
$sql ="CREATE TABLE empresa(";
$sql .= "codigo SERIAL NOT NULL,";
$sql .= "nome VARCHAR(250),";
$sql .= "email VARCHAR(100),";
$sql .= "senha VARCHAR(150),";
$sql .= "PRIMARY KEY(codigo)";
$sql .= ");";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO */
banco($sql);
echo "<p>Tabela Empresa criada com sucesso !</p>";
$sql = "INSERT INTO empresa (nome, email, senha) ";
$sql .= "VALUES ('SENAC Caruaru', 'caruaru@senac.com', '1');";
$sql .= "INSERT INTO empresa (nome, email, senha) ";
$sql .= "VALUES ('SENAC Recife', 'recife@senac.com', '2');";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO E POPULANDO A TABELA */
banco($sql);
echo "<p>Tabela Empresa populada com sucesso ! </p>";
?>