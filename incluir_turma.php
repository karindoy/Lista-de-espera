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
            <input type="date" name="data-incricao" />
            <br>

            <label>Data de fim</label>
            <input type="date" name="data-incricao" />
            <br>

            <label>Dia da semana: </label>
            <select name="semana1">
                <option value="1">Segunda</option>
                <option value="2">Terça</option>
                <option value="3">Quarta</option>
                <option value="4">Quinta</option>
                <option value="3">Sexta</option>
            </select>

            <label>Dia da semana: </label>
            <select name="semana2">
                <option value="1">Segunda</option>
                <option value="2">Terça</option>
                <option value="3">Quarta</option>
                <option value="4">Quinta</option>
                <option value="3">Sexta</option>
            </select>
            <br>

            <label>horario de início</label>
            <input type="text" placeholder="Digite aqui" name="texto" />
            <br>

            <label>Horario de fim</label>
            <input type="text" placeholder="Digite aqui" name="texto" />
            <br>

            <label>Instrutor</label>
            <input type="text" placeholder="Digite aqui" name="texto" />
            <br>
    </div>

    <footer>
        <h5>Instituto Paulista de Geriatria e Gerontologia (IPGG) José Ermírio de Moraes</h5>
    </footer>

</body>

</html>' 
?>