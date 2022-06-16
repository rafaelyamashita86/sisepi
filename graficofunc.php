<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SisEPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Descricao', 'Quantidade'],
                <?php
                include 'conecta.php';
                $sql = "SELECT COUNT(sexo)as total,sexo FROM funcionarios GROUP BY sexo";
                $consulta = mysqli_query($conn, $sql);
                while ($dados = mysqli_fetch_array($consulta)) {
                    $total = $dados['total'];
                    $sexo = $dados['sexo'];

                ?>['<?php echo $sexo ?>', <?php echo $total ?>],
                <?php } ?>
            ]);
            var options = {
                title: 'Funcionários Cadastrados Por Genero',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <style>
        body {
            background-color: #DCDCDC;
        }
    </style>
</head>

<body>
    <img src="" width="20%" height="20%" />
    <hr />
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="dash.php">sisEPI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dash.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Funcionario
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="cadfunc.php">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="visufunc.php">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                EPI
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="cadepi.php">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="visuepi.php">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="entrega.php">Entrega</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Setor
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="cadsetor.php">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="visusetor.php">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Relatorio
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="visuentrega.php">Entrega</a></li>
                                <li><a class="dropdown-item" href="visuepi.php">Listar2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <br>
        <center>
            <h1>
                <p class="text-black">SisEPI - Entrega de EPI eletronico</p>
            </h1>
        </center>
        <br>
        <section>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <div class="card mb rounded shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-file-earmark-richtext" viewBox="0 0 16 16">
                                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                    <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z" />
                                </svg><b>Dados Funcionários</b></h4>
                        </div>
                        <div class="card-body">

                            <div class="container">
                                <div class="row align-items-start">
                                    <div class="col">
                                    <div id="piechart_3d" style="width: 400px; height: 400px;"></div>
                                    </div>
                                    <div class="col">
                                    <div> <?php include 'graf_func_setor.php' ?></div>
                                    </div>
                                    <div class="col">
                                    <div><?php include 'graf_func_funcao.php' ?></div>
                                    </div>
                                </div>
                                <a href="dash.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <hr />
            <center><b>Desenvolvido pela turma TDS05 - SENAI - 2021</b></center>
        </footer>
</body>

</html>