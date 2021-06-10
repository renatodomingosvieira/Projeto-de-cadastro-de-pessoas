<?php 

//var_dump($_REQUEST);

if (empty($_POST)) {
	
	echo "<script>alert('Por favor informe os dados completos'); </script>";
	die;

}else {

	include ("validateform.php");
	validateForm($_POST);
	include ("registradados.php");


	if(save($_POST)){

		echo 'Dados cadatrados com sucess!';
	}else{
		echo 'Problemas ao cadatras as informações,ou seja se fudeooo';
	}

}
// primeira coisa a fazer, é validar se esta chegando conteudo via função empty!




?>