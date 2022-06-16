<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $setor = $_POST['setor'];
    $funcao = $_POST['funcao'];
  
        $sql = "UPDATE funcionarios SET nome='$nome',cpf='$cpf',telefone='$telefone',data_nascimento='$data_nascimento',sexo='$sexo',endereco='$endereco',setor='$setor',funcao='$funcao' WHERE matricula=$id";
        if(mysqli_query($conn,$sql)){
            echo "<script language='javascript' type='text/javascript'> 
              alert('Funcionario atualizado com sucesso!');
              window.location.href='visufunc.php';
              </script>";
        }
        else {
            echo "<script language='javascript' type='text/javascript'> 
              alert('Não foi possível atualizar este registro!');
              window.location.href='editafunc.php'
              </script>";
        }
       
    
    mysqli_close($conn);
 ?> 