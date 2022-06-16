<div class="row justify-content-center row-cols-1 row-cols-md-1 mb-2">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal text-center"><b>EPI's Entregues</b></h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Data</th>
                            <th scope="col">Matricula</th>
                            <th scope="col">EPI</th>
                            <th scope="col">Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'conecta.php';
                        $pesquisa = mysqli_query($conn, "SELECT * FROM entrega");
                        $row = mysqli_num_rows($pesquisa);
                        if ($row > 0) {
                            while ($registro = $pesquisa->fetch_array()) {
                                echo '<tr>';
                                echo '<td>' . $registro['id'] . '</td>';
                                echo '<td>' . $registro['data'] . '</td>';
                                echo '<td>' . $registro['matricula_func'] . '</td>';

                                echo '<td>' . $registro['id_epi'] . '</td>';
                                echo '<td>' . $registro['quantidade'] . '</td>';
                                echo '<td><a href="editafunc.php?id=' . $registro['id'] . '">Editar</a> | <a href="excluifunc.php?id=' . $registro['id'] . '">Excluir</a></td>';
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
                </table>
                <a href="dash.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
            </div>
        </div>
    </div>
</div>