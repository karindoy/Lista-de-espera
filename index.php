<?php echo '<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Lista de espera CID</title>
	<meta charset="UTF-8">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script src="js/index.js"></script>
	<!--===============================================================================================-->
</head>

<body>
	<header class="titulo">
		<h1>Lista de espera</h1>
		<h2>Curso de inclusao digital</h2>
	</header>

	<form action="/processalogin" method="post">
		<!-- ============== TextField do email ============== -->
		<div class="container-login">
			<div>
				<label>Email:</label>
				<input id="inputemail" type="text" name="email" placeholder="nome@email.com" value="admin@gmail.com">
			</div>

			<!-- ============== TextField da senha ============== -->
			<div>
				<label>Senha: </label>
				<input id="inputsenha" type="password" name="senha">
			</div>

			<!-- ==============  Botao de login ============== -->
			<button class="botao" type="button" onclick="verificarLogin()">
				Entrar
			</button>
		</div>
	</form>

	<footer>
		<h5>Instituto Paulista de Geriatria e Gerontologia (IPGG) José Ermírio de Moraes</h5>
	</footer>
</body>

</html>'
?>