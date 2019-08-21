<?php

include "classes/conexao.inc";

	$nome = $_POST['nome'];
	$usuario =$_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$opc = $_POST['opc'];
	$senha_criptografada = $senha;
	
	//$sql=mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '$email'");
	$sql=mysqli_query($conexao, "SELECT * FROM usuarios WHERE user == '$usuario' AND email == $email");
	while($res=mysqli_fetch_array($sql)){

		$e=$res['email'];
		$u=$res['user'];
	}
	
	if(($email == @$e) || ($usuario ==@$u)){
			//Essa alert msg aparecerá caso o e-mai digitado coincida com algum já existente no BDs,
			//	e ao clicar em 'OK' o usuário retornará para a tela de cadastro.
			 
		echo "<script>alert('Usuário e/ou E-mail já existente,favor escolher outro');window.history.go(-1);</script>";
		
	}else{

	$sql="INSERT INTO usuarios(nome,user,email,senha,funcionario) VALUES('$nome','$usuario','$email','$senha_criptografada','$opc')";

	$res=mysqli_query($conexao,$sql);

	$linhas=mysqli_affected_rows($conexao);
			//Essa alert msg aparecerá caso o registro tenha ocorrido com êxito, e ao clicar 
				//em 'OK' o usuário será direcionado para a tela de login.	
	echo "<script>alert('Usuário cadastrado com sucesso!');window.history.go(-2);</script>";	
	}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
	<title>Novo registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	
</body>