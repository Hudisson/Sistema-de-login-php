<?php

	include "classes/conexao.inc";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Logar</title>

	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.css">

	<script type="text/javascript" src="lib/js/jquery.js"></script>
	<script type="text/javascript" src="js/funcoes.js"></script>

</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="navbar navbar-brand navbar-light bg-light">
					<div class="navbar-toggler ">SEVs - Tela de login do Usuário</div>
				<div class="panel panel-body">

					<form id="frmRegistro" method="POST" action="registros.php">
						<label>Usuário</label>
						<input type="text" class="form-control input-sm" name="usuario" id="usuario" placeholder="usuario" required>
						<label>Senha</label>
						<input type="password" class="form-control input-sm" name="senha" id="senha" placeholder="Senha" required>
						<p></p>
						<!--<span class="btn btn-primary" id="registro">Registrar</span>-->
						<!--<button class="btn btn-primary" id="ok">OK</button>-->
						<button class="btn btn-primary" id="registro" onclick="return validar()">Entrar</button>
						<button class="btn btn-primary" id="limpar" type="reset">Limpar</button>
						
					</form>

				</div>	
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	</div>
</body>
</html>
