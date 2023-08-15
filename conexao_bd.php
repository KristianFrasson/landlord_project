<?php

$conexao = "";

/* FUNÇÕES BANCO DE DADOS
----------------------------------------------------------------------------------------------------*/

function conectar(){
	global $conexao;
	
	$servidor = "localhost";
	$banco = "locadora";
	$usuario = "root";
	$senha = "";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or exit("Problema de conexão com o Banco de Dados.");
}

function desconectar(){
	global $conexao;
	mysqli_close($conexao);	
}

function query($sql){
	global $conexao;
	$query = mysqli_query($conexao, $sql);
	return $query;
}

?>