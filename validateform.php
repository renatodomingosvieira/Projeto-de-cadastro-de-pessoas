<?php 

function validateForm ($form){

	$nome = $form['nome'];

	if	(!validateString ($nome)){ 
	//nao é uma string

		die ("Erro, campo invalido!");
	}

	$cpf = $form['cpf'];

	if	(!validateNumber ($cpf)){ 
	//nao é um numero

		die ("Erro, CPF invalido!");
	}

	$profissao = $form['profissao'];

	if	(!validateString ($profissao)){ 
	//nao é uma string

		die ("Erro, profissao invalida!");
	}
	
	$num_registro = $form['num_registro'];

	if	(!validateNumber ($num_registro)){ 
	//nao é um numero

		die ("Erro, Numero do registro invalido!");
	}
	
	$nome_mae = $form['nome_mae'];

	if	(!validateString ($nome_mae)){ 
	//nao é uma string

		die ("Erro, campo invalido!");
	}
	
	$endereco = $form['endereco'];

	if	(!validateString ($endereco)){ 
	//nao é uma string

		die ("Erro, endereco invalido!");
	}

	$cep = $form['cep'];

	if	(!validateString ($cep)){ 
	//nao é uma string

		die ("Erro, Cep invalido!");
	}

	$cep2 = $form['cep'];

	if	(!validateString ($cep2)){ 
	//nao é uma string

		die ("Erro, Cep invalido!");
	}

	$bairro = $form['bairro'];

	if	(!validateString ($bairro)){ 
	//nao é uma string

		die ("Erro, Barrio invalido!");
	}

	$bairro2 = $form['bairro2'];

	if	(!validateString ($bairro2)){ 
	//nao é uma string

		die ("Erro, Barrio invalido!");
	}

	$data_nasc = $form['data_nasc'];

	if	(!validateDate ($data_nasc)){ 
	

		die ("Erro, data de nascimento invalida!");
	}*/

	$num_cns = $form['num_cns'];

	if	(!validateNumber ($num_cns)){ 
	//nao é uma numero

		die ("Erro, numero cns invalido!");
	}

	$num_prontuario = $form['num_prontuario'];

	if	(!validateNumber($num_prontuario)){ 
	//nao é um numero

		die ("Erro, numero do prontuario invalido!");
	}

	$tel1 = $form['tel1'];

	if	(!validateNumber ($tel1)){ 
	//nao é um numero

		die ("Erro, numero de telefone invalido!");
	}

	$tel2 = $form['tel2'];

	if	(!validateNumber ($tel2)){ 
	//nao é um numero

		die ("Erro, numero de telefone invalido!");
	}
	
	$local_trabalho = $form['local_trabalho'];

	if	(!validateString ($local_trabalho)){ 
	//nao é uma string

		die ("Erro, local de trabalho invalido!");
	}

	$cnes = $form['cnes'];

	if	(!validateNumber ($cnes)){ 
	//nao é um numero

		die ("Erro, cnes invalido!");
	}

	$cnpj = $form['cnpj'];

	if	(!validateNumber ($cnpj)){ 
	//nao é um numero

		die ("Erro, cnpj invalido!");
	}

	$end_estabelecimento = $form['end_estabelecimento'];

	if	(!validateString ($end_estabelecimento)){ 
	//nao é uma string

		die ("Erro, endereco invalido!");
	}



}


//função para validar campos strings
function validateString ($string) {


 	if (is_string($string) && ($string != null)) {
 		
 		return true;

	}else {

 		return false;
 	}
}

//função para validar campos numericos
function validateNumber ($number) {

	if (is_numeric($number) && ($number != null)) {
 		
 		return true;

	}else {

 		return false;
 	}
}


//função para validar a data
function validateDate ($date) {

	if (is_date($number) && ($number != null)) {
 		
 		return true;

	}else {

 		return false;
 	}
}





 ?>