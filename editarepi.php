<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $descricao = $_POST['descricao'];
    $numeroca = $_POST['numeroca'];
    $validadeca = $_POST['validadeca'];
    $fornecedor = $_POST['fornecedor'];
    $validadeepi = $_POST['validadeepi'];
    $quantidade = $_POST['quantidade'];
  
    $sql = "UPDATE epi SET descricao='$descricao',numeroca='$numeroca',validadeca='$validadeca',fornecedor='$fornecedor',validadeepi='$validadeepi',quantidade='$quantidade' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('EPI atualizado com sucesso!');
          window.location.href='visuepi.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível atualizar este registro!');
          window.location.href='editaepi.php'
          </script>";
    }
//}
    mysqli_close($conn);
 ?> 