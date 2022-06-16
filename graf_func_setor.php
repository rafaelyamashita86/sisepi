<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Descricao', 'Quantidade'],
          <?php
            include 'conecta.php';
            $sql = "SELECT COUNT(matricula)as quantidade,setor.nome FROM funcionarios,setor WHERE funcionarios.setor=setor.id GROUP BY setor";
            $consulta = mysqli_query($conn, $sql);
            while($dados = mysqli_fetch_array($consulta)){
                $descricao = $dados['nome'];
                $quantidade = $dados['quantidade'];
          ?>
          ['<?php echo $descricao ?>',    <?php echo $quantidade ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Funcionários Cadastrados Por Setor',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d_setor'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d_setor" style="width: 400px; height: 400px;"></div>
  </body>
</html>