<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
	<title>Teste</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	
</body>

<?php 

	include "../sistema/classes/conexao.inc";

	$vUsuario = $_POST['usuario'];
	$vSenha = md5($_POST['senha']);

	$sql="SELECT * FROM usuarios WHERE user='$vUsuario' AND senha='$vSenha'";
	$res=mysqli_query($conexao,$sql);
	$linha=mysqli_affected_rows($conexao);

	if($linha == 1){
		if($linha>0){
			$num=rand(10000000,90000000);
			session_start();
			$_SESSION['numLogin']=$num;
			$_SESSION['user']=$vUsuario;

			while ($tipo_funcionario = mysqli_fetch_array($res)) {
				$resBusca=$tipo_funcionario['funcionario'];
				if($resBusca == "adm"){
					header("Location:view/adm.php?num1=$num");
				}else if($resBusca == "operador"){
					header("Location:view/phome.php?num1=$num");
				}
			}
		
		}
}else{
	echo '<script>alert("ERRO, usuário e senha não encontrados!");window.location.href="../sistema/index.php";</script>';
 	}
 ?>
