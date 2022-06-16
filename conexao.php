<?php
 
 include 'conecta.php';
 $sql = "SELECT COUNT(sexo) AS totalmasc FROM funcionarios WHERE sexo LIKE 'Masculino'";
 $consulta = mysqli_query($conn, $sql);
 while($dados = mysqli_fetch_array($consulta)){
    echo $dados['totalmasc'];
 }

         ?>