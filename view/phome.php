<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Site com Bootstrap</title>

	<link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.css">

	<script type="text/javascript" src="../lib/js/jquery.js"></script>
	<script type="text/javascript" src="../lib/js/bootstrap.js"></script>
</head>
<body>
	<?php
			session_start();
			if(isset($_SESSION['numLogin'])){
				$n1=$_GET['num1'];
				$n2=$_SESSION['numLogin'];
				if($n1 != $n2){
					echo "login não efetuado 2";
					//echo '<script>alert("ERRO 2, login não efetuado!");window.location.href="../index.php";</script>';
					exit;
			}
			}else{
				echo "login não efetuado 1";
				//echo '<script>alert("ERRO 1, login não efetuado!");window.location.href="../index.php";</script>';
				exit;
			} 
		?>

		<?php include "../classes/conexao.inc";  ?>

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="nabar-brand h1 mb-0">SEVs</a>
			<!--A linha abaixo criar um botão na barra herder do site-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
			<!--Cria o icone do botão, nesse caso um icone com três traçinhos-->
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSite">
				<ul class="navbar-nav mr-auto"> <!--mr-auto sentraliza e posiciona a direita-->
					<li class="nav-item">
						<a class="nav-link" href="#">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Serviços</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contato</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Depoimentos</a>
					</li>
				</ul>

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
	<?php mysqli_close($conexao); ?>	
</body>
</html>