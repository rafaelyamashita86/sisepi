<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SisEPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #DCDCDC;
        }

        IMG.displayed {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

    </style>
</head>

<body>
    <img class="displayed" src="./imagens/logo4.PNG" width="15%" height="15%" />
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="dash.php"></a>
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
                                <li><a class="dropdown-item" href="relepi.php">Por EPI</a></li>
                                <li><a class="dropdown-item" href="relatorio.php">Relatorio por Período</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <br>
        <br>
        <section>
            <div class="row justify-content-center row-cols-1 row-cols-md-1 mb-2">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-center"><b>EPI's Entregues</b></h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Quantidade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conecta.php';
                                    $pesquisa = mysqli_query($conn, "SELECT entrega.id,funcionarios.nome,entrega.data,epi.descricao,entrega.quantidade FROM epi,entrega,funcionarios WHERE epi.id= entrega.id_epi AND funcionarios.matricula=entrega.matricula_func ORDER BY data desc");
                                    $row = mysqli_num_rows($pesquisa);
                                    if ($row > 0) {
                                        while ($registro = $pesquisa->fetch_array()) {
                                            echo '<tr>';
                                            echo '<td>' . $registro['id'] . '</td>';
                                            echo '<td>' . $registro['nome'] . '</td>';
                                            echo '<td>' . $registro['data'] . '</td>';
                                            echo '<td>' . $registro['descricao'] . '</td>';
                                            echo '<td>' . $registro['quantidade'] . '</td>';
                                            echo '</tr>';
                                        }
                                        echo '</tbody>';
                                        echo '</table>';
                                    } else {
                                        echo "Não há registros para listar!";
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
                                    ?>
                            </table>
                            <a href="dash.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
                        </div>
                    </div>

        </section>
        <footer>
            <hr />
            <center><b>Desenvolvido pela turma TDS05 - SENAI - 2021</b></center>
        </footer>
</body>

</html>