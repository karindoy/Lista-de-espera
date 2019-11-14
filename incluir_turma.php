<?php echo
'<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf8" />
    <title>Lista de espera CID</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

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


    <h1>Cadastrar Turma</h1>
    <div>
        <form action="processa.php" method="POST">
            <label>Data de início</label>
            <input type="date" name="data-inicio" />
            <br>

            <label>Data de fim</label>
            <input type="date" name="data-fim" />
            <br>

            <label>Dia da semana: </label>
            <select name="semana1">
                <option value="segunda1">Segunda</option>
                <option value="terca1">Terça</option>
                <option value="quarta1">Quarta</option>
                <option value="quinta1">Quinta</option>
                <option value="sexta1">Sexta</option>
            </select>

            <label>Dia da semana: </label>
            <select name="semana2">
                <option value="segunda2">Segunda</option>
                <option value="terca2">Terça</option>
                <option value="quarta2">Quarta</option>
                <option value="quinta2">Quinta</option>
                <option value="sexta2">Sexta</option>
            </select>
            <br>

            <label>horario de início</label>
            <input type="text" placeholder="Digite aqui" name="hora-inicio" />
            <br>

            <label>Horario de fim</label>
            <input type="text" placeholder="Digite aqui" name="hora-fim" />
            <br>

            <label>Instrutor</label>
            <input type="text" placeholder="Digite aqui" name="instrutor" />
            <br>
    </div>

    <footer>
        <h5>Instituto Paulista de Geriatria e Gerontologia (IPGG) José Ermírio de Moraes</h5>
    </footer>

</body>

</html>' 
?>