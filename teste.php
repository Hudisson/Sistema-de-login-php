<?php

	include "classes/conexao.inc";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar usuário</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrapCSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="lib/dompdf-0.5.1/www/style.css">

	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript" src="js/funcoes.js"></script>

</head>
<body style="background-color: gray">
<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="nabar-brand h1 mb-0">SEVs</a>
			<!--A linha abaixo criar um botão na barra herder do site-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
			<!--Cria o icone do botão, nesse caso um icone com três traçinhos-->
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSite">
				<form id="frmRegistro" method="POST" action="novoregistro.php">
						
						<label>Nome</label>
						<input type="text" class="form-control input-sm" name="nome" id="nome" placeholder="Nome" required>
						<label>Usuário</label>
						<input type="text" class="form-control input-sm" name="usuario" id="usuario" placeholder="usuário" required>
						<label>E-mail</label>
						<input type="email" class="form-control input-sm" name="email" id="email" placeholder="E-mail" required>
						<label>Senha</label>
						<input type="password" class="form-control input-sm" name="senha" id="senha" placeholder="Senha" required><br>
		
						<button class="btn btn-primary" id="registro">Registrar</button>
						<button class="btn btn-primary" id="limpar" type="reset">Limpar</button>
						<a href="index.php" class="btn btn-outline-dark">Voltar Login</a><br>
					</form><br>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Usuário</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="../logout.php">Sair</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div><!--Fima da div containe-->
</body>
</html>