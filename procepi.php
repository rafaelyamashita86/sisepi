<?php
include 'conecta.php';
$hoje = date('d/m/Y');
$assunto = $_POST['assunto'];
$selecquantidade = $_POST['selecquantidade'];
        echo '<tr>';
        echo '<td>' . $hoje . '</td>';
        echo '<td>' . $assunto['assunto'] . '</td>';
        echo '<td>' . $selectquantidade['selectquantidade'] . '</td>';
        echo '</tr>';
?>