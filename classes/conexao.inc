<?php
	/*Arquivo de conecxão com Banco de Dados*/

      // Nome do DB: db_login

	$servidor = "localhost"; // servidor

	$usuario = "root"; // usuário

	$senha = "";    //senha

	$bd ="db_sistema"; // Banco de Dados

	#$con = mysqli_connect($host, $user, $pass); // Realiza o acesso ao servidor

	#mysqli_select_db($con, $db); // Seleciona o BDs após conectar ao serdor

  $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
	/*
	$banco = mysqli_connect_errno(); // Verifica se a conexão está correta...
	if($banco==true){
			//caso haja falha na conexão
		echo "Erro ao conectar";
	}else{
		echo "Conectado com sucesso";
	}
*/

?>
