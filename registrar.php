<?php

	include "classes/conexao.inc";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar usuário</title>
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">

	<script type="text/javascript" src="lib/js/jquery.js"></script>
	<script type="text/javascript" src="js/funcoes.js"></script>

</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="navbar navbar-brand navbar-light bg-light"><br>
						<div class="navbar-toggler ">Registrar Funcionário</div>
					<div class="panel panel-body">

					<form id="frmRegistro" method="POST" action="novoregistro.php">
						<label>Nome</label>
						<input type="text" class="form-control input-sm" name="nome" id="nome" placeholder="Nome" required>
						<label>Usuário</label>
						<input type="text" class="form-control input-sm" name="usuario" id="usuario" placeholder="usuário" required>
						<label>E-mail</label>
						<input type="email" class="form-control input-sm" name="email" id="email" placeholder="E-mail" required>
						<label>Senha</label>
						<input type="password" class="form-control input-sm" name="senha" id="senha" placeholder="Senha" required><br>
						<div>
							<label>Tipo de registro:</label>
							<input type="radio" name="opc" value="operador" required/> Operador
							<input type="radio" name="opc" value="adm" required/> Operador Adm
						</div><br>
						<button class="btn btn-primary" id="registro">Registrar</button>
						<button class="btn btn-primary" id="limpar" type="reset">Limpar</button>
						<a href="index.php" class="btn btn-outline-dark">Voltar Login</a><br>
					</form><br>
				</div>	
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	
	</div>
</body>
</html>


