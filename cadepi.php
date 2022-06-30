<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SisEPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #DCDCDC;
        }

        #sair {
            padding-left: 60em;
            padding-top: .5em;
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
                                Relatorios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="visuentrega.php">Entregas</a></li>
                                <li><a class="dropdown-item" href="relepi.php">Por EPI</a></li>
                                <li><a class="dropdown-item" href="relatorio.php">Por Periodo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" id="sair">
                            <a href="sair.php" style="text-decoration:none">Sair&nbsp;<img src="imagem/logout2.png" width="23" height="23"></a>
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
                            <h4 class="my-0 fw-normal text-center"><b>Cadastrar EPI</b></h4>
                        </div>
                        <div class="card-body">
                            <form action="cadepis.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Descrição</label>
                                    <input type="text" class="form-control" name="descricao" placeholder="Digite a descrição" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Numero do CA</label>
                                    <input type="text" class="form-control" name="numeroca" placeholder="Digite o número do CA">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Validade do CA</label>
                                    <input type="date" class="form-control" name="validadeca" placeholder="Digite a validade do CA">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Fornecedor</label>
                                    <input type="text" class="form-control" name="fornecedor" placeholder="Digite o nome do fornecedor">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Validade do EPI</label>
                                    <input type="date" class="form-control" name="validadeepi" placeholder="Digite a validade do epi">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Quantidade</label>
                                    <input type="text" class="form-control" name="quantidade" placeholder="Digite a quantidade">
                                </div>
                                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                                <a href="dash.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
                            </form>
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