<?php
    include 'conecta.php';
    $descricao = $_POST['descricao'];
    $numeroca = $_POST['numeroca'];
    $validadeca = $_POST['validadeca'];
    $fornecedor = $_POST['fornecedor'];
    $validadeepi = $_POST['validadeepi'];
    $quantidade = $_POST['quantidade'];

    $query = $conn->query("SELECT * FROM epi WHERE descricao='$descricao'");
    if(mysqli_num_rows($query)>0){
        echo "<script language='javascript' type='text/javascript'>
        alert('EPI já existe na base de dados!');
        window.location.href='visuepi.php'
        </script>";
        exit();
    }
    else {
    $sql = "INSERT INTO epi(descricao,numeroca,validadeca,fornecedor,validadeepi,quantidade) VALUES ('$descricao','$numeroca','$validadeca','$fornecedor','$validadeepi','$quantidade')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('EPI inserido com sucesso!');
          window.location.href='visuepi.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='cadepi.php'
          </script>";
    }
}
    mysqli_close($conn);
 ?> 