<?php 

$servidor = 'localhost:3306';
$usuario = "root";
$senha = '';
$datebase = 'covid';

$connect = mysqli_connect($servidor,$usuario,$senha,$datebase);

if (!$connect) {

	die ("Falha na conexão: ". mysqli_connect_error ());

	} else {

		echo "Conectado com sucesso ao servidor!";

	}



 ?>