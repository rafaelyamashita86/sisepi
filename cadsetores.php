<?php
    include 'conecta.php';
    $nome = $_POST['nome'];

    $query = $conn->query("SELECT * FROM setor WHERE nome='$nome'");
    if(mysqli_num_rows($query)>0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Setor já existe na base de dados!');
        window.location.href='visusetor.php'
        </script>";
        exit();
    }
    else {
    $sql = "INSERT INTO setor(nome) VALUES ('$nome')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Setor inserido com sucesso!');
          window.location.href='visusetor.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='cadsetor.php'
          </script>";
    }
}
    mysqli_close($conn);
 ?> 