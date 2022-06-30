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

        #sair {
            margin-left: 46em;
            padding-top: .5em;

        }
    
    </style>
</head>

<body>
    <img class="displayed" src="./imagens/logo4.PNG" width="15%" height="15%" />
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
                                Relatorios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="visuentrega.php">Entregas</a></li>
                                <li><a class="dropdown-item" href="relepi.php">Por EPI</a></li>
                                <li><a class="dropdown-item" href="relatorio.php">Por Periodo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" id="sair">
                            <a href="sair.php" style="text-decoration:none">Sair&nbsp;<img src="imagens/logout.png" width="23" height="23"></a>
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
            <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-2">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-center"><b>Entrega de EPI's</b></h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Matricula</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Setor</th>
                                        <th scope="col">Função</th>
                                        <th scope="col">EPI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conecta.php';
                                    $matricula = $_POST['matricula'];
                                    $nome = $_POST['nome'];
                                    $pesquisa = mysqli_query($conn, "SELECT * FROM funcionarios WHERE matricula='$matricula' OR nome='$nome'");

                                    $row = mysqli_num_rows($pesquisa);
                                    if ($row > 0) {
                                        while ($registro = $pesquisa->fetch_array()) {
                                            $id = $registro['matricula'];
                                            echo '<tr>';
                                            echo '<td>' . $registro['matricula'] . '</td>';
                                            echo '<td>' . $registro['nome'] . '</td>';
                                            echo '<td>' . $registro['setor'] . '</td>';
                                            echo '<td>' . $registro['funcao'] . '</td>';
                                            echo '<td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                          </svg></td>';
                                            echo '</tr>';

                                    ?>

                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Entrega</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <form action="cadentrega.php" method="POST">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label>Matricula:</label>
                                                                            </br>
                                                                            <input type="text" class="col-4" value="<?php echo $registro['matricula']; ?>" name="matricula" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm">
                                                                            <label for="nome">Nome:</label>
                                                                            <div class="input-group mb-3">
                                                                                <label class="form-control" name="nome"><?php echo $registro['nome']; ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <label for="setor">Setor</label>
                                                                            <div class="input-group mb-3">
                                                                                <label class="form-control" name="setor"><?php echo $registro['setor']; ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <label for="funcao">Função</label>
                                                                            <div class="input-group mb-3">
                                                                                <label class="form-control" name="funcao"><?php echo $registro['funcao']; ?></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-9">
                                                                            <label for="epi">Selecione o EPI</label>
                                                                            <?php
                                                                            include 'conecta.php';
                                                                            $query = mysqli_query($conn, "SELECT * FROM epi ORDER BY descricao");
                                                                            echo '<select name="epi" class="form-select">';
                                                                            while ($dados = $query->fetch_array()) {
                                                                                echo "<option value='" . $dados['id'] . "'>" . $dados['descricao'] . "</option>";
                                                                            }
                                                                            echo "</select>";
                                                                            mysqli_close($conn);
                                                                            ?>
                                                                        </div>
                                                                        <div class="form-group col-md-3">
                                                                            <label>Quantidade</label>
                                                                            <select name="quantidade" class="form-select">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    </br>
                                                                    <button type="submit" class="btn btn-outline-success">Gravar Entrega</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        </div>
                    </div>

            <?php
                                        }
                                    } else {
                                        echo 'Não existem registros!!!';
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
            ?>
            </tbody>
            </table>

            <a href="entrega.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
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