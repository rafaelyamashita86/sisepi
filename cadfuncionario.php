<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $setor = $_POST['setor'];
    $funcao = $_POST['funcao'];
    $query = $conn->query("SELECT * FROM funcionarios WHERE cpf='$cpf'");
    if(mysqli_num_rows($query)>0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Funcionario já existe na base de dados!');
        window.location.href='visufunc.php'
        </script>";
        exit();
    }
    else {
    $sql = "INSERT INTO funcionarios(nome,cpf,telefone,data_nascimento,sexo,endereco,setor,funcao) VALUES ('$nome','$cpf','$telefone','$data_nascimento','$sexo','$endereco','$setor','$funcao')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Funcionario inserido com sucesso!');
          window.location.href='visufunc.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='cadfuncionario.php'
          </script>";
    }
}
    mysqli_close($conn);
 ?> 