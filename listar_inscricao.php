<?php 
echo '<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Lista de espera CID</title>
	<meta charset="UTF-8">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="js/inscricao.js"></script>
	<!--===============================================================================================-->
</head>

<body>
	<header class="titulo">
		<h2>Lista de espera</h2>
		<h3>Curso de inclusao digital</h3>
	</header>
	<div>
		<nav>
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a data-toggle="dropdown">Lista de espera</span></a>
					<ul class="dropdown-menu">
						<li><a href="./incluir_inscricao.php">Inscrever</a></li>
						<li><a href="./listar_inscricao.php">Listar inscritos</a></li>
					</ul>
				</li>
				<li><a>Matriculas</a>
					<ul class="dropdown-menu">
						<li><a href="./incluir_matricula.php">matricular</a></li>
						<li><a href="./listar_matricula.php">Listar matriculados</a></li>
					</ul>
				</li>
				<li><a>Turmas</a>
					<ul class="dropdown-menu">
						<li><a href="./incluir_turma.php">Abrir turmas</a></li>
						<li><a href="./listar_turmas.php">Listar turmas</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
	<div>
		<div>
			<h3>Lista de inscritos</h2>
				<input type="text" placeholder="pesquise aqui" name="pesquisa_inscrito" />
		</div>
		<table class="tabelas"> 
				<tbody>
					<tr>
						<th>posição</th>
						<th>nome</th>
						<th>telefone 1</th>
						<th>telefone 2</th>
						<th>data incrição</th>
						<th>status</th>
					</tr>


		'?>
		<?php
		function criarTblInscritos(){
			$linha=1;
			$col=1;
			for($linha=1;$linha<=20;$linha++){	
				print 
				'<tr>
					<td>'.$col.'</td>
					<td>pessoa'.$col.'</td>
					<td>tel 1 -'.$col.'</td>
					<td>tel 2 -'.$col.'</td>
					<td>'.$col.'/05/2019</td>
					<td>aguardando</td>
				</tr>';
				$col=$col+1;
			}

		};
		criarTblInscritos();

		?>
		<?php
echo
	'</tbody>
	</table>

		</div>

		<footer>
			<h5>Instituto Paulista de Geriatria e Gerontologia (IPGG) José Ermírio de Moraes</h5>
		</footer>

	</body>

</html>'
?>