<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SisEPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
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
    <hr />
    <header>

    </header>
    <div class="container-fluid">
        <section>
            <div class="row justify-content-center row-cols-1 row-cols-md-4 mb-2">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-center"><b>Login</b></h4>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST">
                                <div class="form-group text-center">
                                    <label>Login</label>
                                    <input type="text" class="form-control" name="login" placeholder="Insira o seu login" required />
                                    <br />
                                    <label>Senha</label>
                                    <input type="password" class="form-control" name="senha" required />
                                    <br />
                                    <button type="submit" class="btn btn-outline-success">Login</button>
                                </div>
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