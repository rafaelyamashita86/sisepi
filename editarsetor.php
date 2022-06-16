<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
  
        $sql = "UPDATE setor SET nome='$nome' WHERE id=$id";
        if(mysqli_query($conn,$sql)){
            echo "<script language='javascript' type='text/javascript'> 
              alert('Setor atualizado com sucesso!');
              window.location.href='visusetor.php';
              </script>";
        }
        else {
            echo "<script language='javascript' type='text/javascript'> 
              alert('Não foi possível atualizar este registro!');
              window.location.href='visusetor.php'
              </script>";
        }
       
    
    mysqli_close($conn);
 ?> 