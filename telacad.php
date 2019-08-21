<?php

	include "classes/conexao.inc";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Logar</title>

	<link rel="stylesheet" type="text/css" href="lib/bootstrapCSS/bootstrap.css">

	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript" src="js/funcoes.js"></script>

</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="navbar navbar-brand navbar-light bg-light">
					<div class="navbar-toggler ">Registrar Administrador</div>
				<div class="panel panel-body">

					<form id="frmRegistro" method="POST" action="registros.php">
						<label>Nome</label>
						<input type="text" class="form-control input-sm" name="nome" id="nome" placeholder="Nome" required>
						<label>Usuário</label>
						<input type="text" class="form-control input-sm" name="usuario" id="usuario" placeholder="usuario" required>
						<label>E-mail</label>
						<input type="email" class="form-control input-sm" name="email" id="email" placeholder="E-mail" required>
						<label>Senha</label>
						<input type="password" class="form-control input-sm" name="senha" id="senha" placeholder="Senha" required>
						<p></p>
						<!--<span class="btn btn-primary" id="registro">Registrar</span>-->
						<!--<button class="btn btn-primary" id="ok">OK</button>-->
						<button class="btn btn-primary" id="registro" onclick="return validar()">Registrar</button>
						<button class="btn btn-primary" id="limpar" type="reset">Limpar</button>
						<a href="index.php" class="btn btn-outline-dark">Voltar Login</a>
					</form>

				</div>	
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function validar(){
		var nome = frmRegistro.nome.value;
		var usuario = frmRegistro.usuario.value;
		var email = frmRegistro.email.value;
		var senha = frmRegistro.senha.value;
		if(nome==""){
			alert("Preencha o campo Nome");
			frmRegistro.nome.focus();
			return false;
		}else if(usuario==""){
			alert("Preencha o campo usuário");
			frmRegistro.usuario.focus();
			return false;
		}else if(email==""){
			alert("Preencha o campo E-mail");
			frmRegistro.email.focus();
			return false;
		}else if(senha==""){
			alert("Preencha o campo Senha");
			frmRegistro.senha.focus();
			return false;
		}
	}
</script>


