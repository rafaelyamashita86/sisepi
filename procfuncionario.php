<?php
    include 'conecta.php';
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $pesquisa = mysqli_query($conn, "SELECT * FROM funcionarios WHERE matricula='$matricula' OR nome='$nome'");
    $row = mysqli_num_rows($pesquisa);
    if ($row > 0) {
        while ($registro = $pesquisa->fetch_array()) {
            echo '<tr>';
            echo '<td>' . $registro['matricula'] . '</td>';
            echo '<td>' . $registro['nome'] . '</td>';
            echo '<td>' . $registro['setor'] . '</td>';
            echo '<td>' . $registro['funcao'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo "Não há registros para listar!";
        echo '</tbody>';
        echo '</table>';
    }
?>