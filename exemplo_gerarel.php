<?php
    ini_set("allow_url_fopen", true);
    ob_start();
    $nome = $_POST['grupos'];
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAI - Serviços</title>
  </head>
  <body>
    <img id="logo" src="/suporte/imagens/senaiazul.png" width="20%" height="20%">
    <hr>
    <center>
    <h1><b>Inventário do <?php echo $nome; ?></b></h1>
    </center>
    <br>
    <table border="1">
      <thead>
        <tr>
          <th class="letra" scope="col">Computador</th>
          <th class="letra" scope="col">RAM</th>
          <th class="letra" scope="col">Processador</th>
          <th class="letra" scope="col">SO</th>
          <th class="letra" scope="col">Versão</th>
          <th class="letra" scope="col">Fabricante</th>
          <th class="letra" scope="col">Patrimonio do Computador</th>
          <th class="letra" scope="col">Patrimonio do Monitor</th>
          <th class="letra" scope="col">Aquisição CPU</th>                
        </tr>
      </thead>
      <tbody>
      <?php
        include 'conecta.php';
        $pesquisa = mysqli_query($conn, "select inventario.*, info.*, grupo.* from inventario,info,grupo where info.id_computador = inventario.id and inventario.id = grupo.id_computador and grupo.nome_grupo = '$nome';");
        $row = mysqli_num_rows($pesquisa);
        if($row > 0){
          while($registro = $pesquisa-> fetch_array()){
            echo '<tr>';
            echo '<th class="letra" scope="row">'.$registro['nome_computador'].'</th>';
            echo '<td class="letra">'.$registro['ram'].'</td>';
            echo '<td class="letra">'.$registro['processador'].'</td>';
            echo '<td class="letra">'.$registro['so'].'</td>';
            echo '<td class="letra">'.$registro['build'].'</td>';
            echo '<td class="letra">'.$registro['fabricante'].'</td>';
            echo '<td class="letra">'.$registro['pat_cpu'].'</td>';
            echo '<td class="letra">'.$registro['pat_monitor'].'</td>';
            echo '<td class="letra">'.$registro['data_aquisicao'].'</td>';
            echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
        }
        else {
          echo "Não há máquinas para listar!";
          echo '</tbody>';
          echo '</table>';
        }
      ?>
  </body>
</html>
<?php
    $html = ob_get_clean();
    require_once 'scripts/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("relatorio$nome.pdf");
?>