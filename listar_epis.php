<?php
    include_once './conexao.php';
    $assunto = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);
    $result_epi = "SELECT descricao FROM epi WHERE descricao LIKE '%".$assunto."%' ORDER BY descricao ASC LIMIT 7";
    $resultado_epi = $conn->prepare($result_epi);
    $resultado_epi->execute();

    while($row_epi = $resultado_epi->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row_epi['descricao'];
    }

    echo json_encode($data);

?>