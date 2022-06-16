<?php
    $conn = mysqli_connect("localhost", "root", "", "sisepi");
    mysqli_set_charset($conn, "utf8");
    if(!$conn){
        echo "Error: Falha de conexÃ£o ao Banco de Dados MariaDB. ".PHP_EOL;
        echo "Debugging error: ".mysqli_connect_error().PHP_EOL;
    }
?>