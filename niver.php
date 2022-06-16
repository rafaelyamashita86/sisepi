<?php

include "conecta.php";

   $mes = date("m");
   $dia = date("d");

   #SQL lista aniversariantes do mes
   $sql = "SELECT nome, DAY(data_nascimento)  FROM funcionarios WHERE MONTH(data_nascimento) ='$mes'";
   $resultado = mysqli_query($conn,$sql);
   
   while ($row = mysqli_fetch_array($resultado))           
      {
           echo "<b>Nome </b> : $row[0]";
           echo "            ";
           echo "<b>Dia </b> : $row[1]/$mes<br>";
      }
   echo "<br>";
?>
