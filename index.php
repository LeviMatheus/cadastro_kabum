<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/personalizado.css" rel="stylesheet">
		<title>Login: Cadastro Kabum</title>
	</head>
	<body class="login_fundo">
		<section>
			<div class="container py-5 h-100 col-xl-5">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="card">
						<div class="card-body p-5 text-center">
							<h2 class="text-uppercase mb-3 titulo_login">Acessar sistema de clientes</h2>
							<div class="mb-4 div_login">
								<!-- <label class="form-label label_login">Email</label> -->
								<input type="email" class="form-control form-control-lg" placeholder="exemplo@exemplo.com" />
							</div>
							<div class="mb-4 div_login">
								<!-- <label class="form-label label_login">Senha</label> -->
								<input type="password" class="form-control form-control-lg" placeholder="Senha"/>
							</div>
							<div class="mb-4 div_login">
								<!-- <label class="form-label label_login">Senha</label> -->
								<button class="btn btn-primary texto_botao btn-block mb-2" type="submit">Entrar</button>
								<p class="small mb-2" id="perdeu_senha">
									<a class="text-black-50" href="index.php">Esqueceu a senha ?</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>