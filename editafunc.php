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
                            <h4 class="my-0 fw-normal text-center"><b>Cadastrar Funcionario</b></h4>
                        </div>
                        <div class="card-body">
                            <?php
                            include 'conecta.php';
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM funcionarios WHERE matricula=$id";
                            $query = $conn->query($sql);
                            while ($dados = $query->fetch_assoc()) {
                                $id = $dados['matricula'];
                                $nome = $dados['nome'];
                                $cpf = $dados['cpf'];
                                $telefone = $dados['telefone'];
                                $data_nascimento = $dados['data_nascimento'];
                                $sexo = $dados['sexo'];
                                $endereco = $dados['endereco'];
                                $setor = $dados['setor'];
                                $funcao = $dados['funcao'];
                            }
                            ?>
                            <form action="editarfunc.php?id=<?php echo $id; ?>" method="POST">
                            <div class="mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">CPF</label>
                                    <input type="text" class="form-control" name="cpf" value="<?php echo $cpf; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Telefone</label>
                                    <input type="text" class="form-control" name="telefone" value="<?php echo $telefone; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Data de Nascimento</label>
                                    <input type="date" class="form-control" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sexo</label>
                                    <select class="form-select" name="sexo">
                                        <option selected ><?php echo $sexo; ?></option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Outro">Outro</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Endereço</label>
                                    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="setor">Selecione o Setor</label>
                                    <?php
                                    include 'conecta.php';
                                    $query = mysqli_query($conn, "SELECT * FROM setor ORDER BY nome");
                                    echo '<select name="setor" class="form-select">';
                                    while ($dados = $query->fetch_array()) {
                                        echo "<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>";
                                    }
                                    echo "</select>";
                                    mysqli_close($conn);
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Função</label>
                                    <input type="text" class="form-control" name="funcao" value="<?php echo $funcao; ?>">
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