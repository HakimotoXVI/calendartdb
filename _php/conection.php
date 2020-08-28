<?php 

function conecta(){
	$host = "localhost";
	$usuario = "root";
	$senha = "vertrigo";
	$nome_bd = "calendario";

	$conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
	mysqli_set_charset($conexao, "utf8");

	return $conexao;
}

?>