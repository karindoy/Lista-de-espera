
<?php
$dia = array('14/10/2019', '24/10/2019');
$situacao = array('cancelada', 'concluido');
echo '<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de espera CID</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
   <!--<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> --> 

</head>

<body>
    <header class="titulo">
        <h2>Lista de espera</h2>
        <h3>Curso de inclusão digital</h3>
    </header>
    <div>
        <nav id="menu">

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
        </nav>
    </div>
    <div id="header"></div>
    <h1>Cadastrar na lista de espera</h1>

    <form action="processa.php" method="POST">
        <label>Data da inscrição </label>
        <input type="date" name="data_incricao" />
        <br>

        <label>Nome completo: </label>
        <input type="text" placeholder="Digite aqui" name="nome" />
        <br>

        <label>Nome da mãe</label>
        <input type="text" placeholder="Digite aqui" name="nome_mae" />
        <br>

        <label>Data de nascimento</label>
        <input type="date" placeholder="Digite aqui" name="data_nasc" />
        <br>

        <div class="Telefones">
            <label>Telefone</label>
            <label>Tipo</label>
            <select name="tipotel">
                <option value="Residencia">Residencia</option>
                <option value="Celular">Celular</option>
            </select>
            <br>

            <label>DDD</label>
            <input type="text" placeholder="11" name="ddd" />

            <label>Telefone</label>
            <input type="text" placeholder="2222-3333" name="tel" />
            <br>
            
        <label>Telefone</label>
        <label>Tipo</label>
        <select name="tipotel">
            <option value="Residencia">Residencia</option>
            <option value="Celular">Celular</option>
        </select>
        <br>

        <label>DDD</label>
        <input type="text" placeholder="11" name="ddd" />

        <label>Telefone</label>
        <input type="text" placeholder="2222-3333" name="tel" />
        <br>
        </div>

        <label>Escolaridade</label>
        <select name="escolaridade">
            <option value="nao_frequentou">Nao frequentou</option>
            <option value="fundamental">Ensino Fundamental</option>
            <option value="medio">Ensino Médio</option>
            <option value="superior">Ensino Superior</option>
        </select>

        <br>
        <label>Situação escolar</label><br>
        <select name="situacao_escolar">
            <option value="incompleto">Incompleto</option>
            <option value="cursando">Cursando</option>
            <option value="completo">Completo </option>
        </select>

        <br>
        <input type="submit" name="submit" value="Enviar" />
    </form>
    <table>
        <tr>
            <th>Turmas cadastradas</th>
            <th>Situação</th>
        </tr>

        <tr>
            <td>' .$dia[0] . '</td>
            <td>' . $situacao[0] . '</td>
        </tr>
        <tr>
            <td>' . $dia[1] . '</td>
            <td>' . $situacao[1] . '</td>
        </tr>
    </table>
    <footer>
        <h5>Instituto Paulista de Geriatria e Gerontologia (IPGG) José Ermírio de Moraes</h5>
    </footer>
</body>

</html>'
?>