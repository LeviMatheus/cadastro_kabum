<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--BOOTSTRAP CSS-->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<title>Cadastro Kabum</title>
	</head>
  	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Cadastro Kabum</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?page=novo">Novo cliente</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?page=listar">Listar clientes</a>
					</li>
				</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col mt-5">
					<?php
						include("../config/config.php");
						switch(@$_REQUEST["page"]){
							case "novo":
								include("user_novo.php");
								break;
							case "listar":
								include("user_listar.php");
								break;
							case "salvar_novo_cliente":
								include("cadastrar_cliente.php");
								break;
							default:
								include("../index.php");
								break;
						}
					?>
				</div>
			</div>
		</div>
    
	<!--BOOTSTRAP JS-->
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  	</body>
</html>