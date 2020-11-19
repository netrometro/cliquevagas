<?php 
/* SOLICITANDO ARQUIVO DE CONEXÃO COM O BANCO */
require("../model/persistency/db.php");

/* DELETAR TABELA CASO EXISTIR empresa */
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
/* POPULANDO TABELA */
$sql = "INSERT INTO empresa (nome, email, senha) ";
$sql .= "VALUES ('SENAC Caruaru', 'caruaru@senac.com', '1');";
$sql .= "INSERT INTO empresa (nome, email, senha) ";
$sql .= "VALUES ('SENAC Recife', 'recife@senac.com', '2');";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO E POPULANDO A TABELA */
banco($sql);
echo "<p>Tabela Empresa populada com sucesso ! </p>";
/* DELETAR TABELA CASO EXISTIR anuncios */
banco("DROP TABLE IF EXISTS anuncios");
/* PRINTAR SE A TABELA FOI APAGADA */
echo "<p>Tabela Anuncios apagada com sucesso !</p>";
$sql ="CREATE TABLE anuncios(";
$sql .="codigo SERIAL NOT NULL,";
$sql .="precisase VARCHAR(250),";
$sql .="descricao VARCHAR(400),";
$sql .="telefone VARCHAR(100),";
$sql .="email VARCHAR(100),";
$sql .="endereco VARCHAR(100),";
$sql .="tempo DATE NOT NULL DEFAULT CURRENT_DATE";
$sql .=");";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO */
banco($sql);
echo "<p>Tabela Anuncios criada com sucesso !</p>";
/* POPULANDO TABELA */
$sql ="INSERT INTO anuncios (precisase, descricao, telefone, email, endereco, tempo) ";
$sql .="VALUES ('Barbeiro', 'Precisa-se de barbeiro experiente.', '8198772364', 'barbershop@barber.com', 'Rua campo novo 199', '2020-10-23');";
$sql .="INSERT INTO anuncios (precisase, descricao, telefone, email, endereco, tempo) ";
$sql .="VALUES ('Mecanico', 'Precisa-se de Mecanico Maneta.', '87987654575', 'seucraudio@hotmail.com', 'Rua valentino rafael 55', '1500-09-24');";
banco($sql);
echo "<p>Tabela Anuncios populada com sucesso ! </p>";
/* DELETAR TABELA CASO EXISTIR favbusca*/
banco ("DROP TABLE IF EXISTS favbusca");
/* PRINTAR SE A TABELA FOI APAGADA  */
echo "<p>Tabela Busca Favorita(favbusca) apagada com sucesso !</p>";
$sql ="CREATE TABLE favbusca(";
$sql .="email VARCHAR(100),";
$sql .="buscaFavorita VARCHAR(100)";
$sql .=");";
/* PASSANDO O PARAMETRO SQL PARA FUNÇÃO BANCO */
banco($sql);
echo "<p>Tabela Busca Favorita(favbusca) criada com sucesso ! </p>";
/* POPULANDO TABELA */
$sql ="INSERT INTO favbusca (email, buscaFavorita) ";
$sql .="VALUES ('fabinhomotorista@gmail.com', 'Vaga para motorista');";
$sql .="INSERT INTO favbusca (email, buscaFavorita) ";
$sql .="VALUES ('higor@gmail.com', 'Vaga para Analista de T.I');";
banco($sql);
echo "<p>Tabela Busca Favorita(favbusca) populada com sucesso ! </p>";

?>