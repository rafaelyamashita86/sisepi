<?php
    include 'conecta.php';
    $matricula = $_POST['matricula'];
    $epi = $_POST['epi'];
    $quantidade = $_POST['quantidade'];
   
    $sql = "INSERT INTO entrega(matricula_func,data,id_epi,quantidade) VALUES ('$matricula',NOW(),'$epi','$quantidade')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Entrega realizada com sucesso!');
          window.location.href='visuentrega.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='procfunc.php'
          </script>";
    }

    mysqli_close($conn);
 ?> 