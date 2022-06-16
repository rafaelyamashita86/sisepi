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
    </style>
</head>

<body>
    <img src="" width="20%" height="20%" />
    <hr />
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">>
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
            <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-2">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-center"><b>Cadastrar EPI</b></h4>
                        </div>
                        <div class="card-body">
                            <?php
                            include 'conecta.php';
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM epi WHERE id=$id";
                            $query = $conn->query($sql);
                            while ($dados = $query->fetch_assoc()) {
                                $id = $dados['id'];
                                $descricao = $dados['descricao'];
                                $numeroca = $dados['numeroca'];
                                $validadeca = $dados['validadeca'];
                                $fornecedor = $dados['fornecedor'];
                                $validadeepi = $dados['validadeepi'];
                                $quantidade = $dados['quantidade'];
                            }
                            ?>
                            <form action="editarepi.php?id=<?php echo $id; ?>" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Descrição</label>
                                    <input type="text" class="form-control" name="descricao" value="<?php echo $descricao; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Numero do CA</label>
                                    <input type="text" class="form-control" name="numeroca" value="<?php echo $numeroca; ?>" require>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Validade do CA</label>
                                    <input type="text" class="form-control" name="validadeca" value="<?php echo $validadeca; ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Fornecedor</label>
                                    <input type="text" class="form-control" name="fornecedor" value="<?php echo $fornecedor; ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Validade do EPI</label>
                                    <input type="text" class="form-control" name="validadeepi" value="<?php echo $validadeepi; ?>" require>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Quantidade</label>
                                    <input type="text" class="form-control" name="quantidade" value="<?php echo $quantidade; ?>" require>
                                </div>
                                <button type="submit" class="btn btn-outline-success">Atualizar</button>
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