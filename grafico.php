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
            $sql = "SELECT epi.descricao,entrega.quantidade FROM entrega, epi";
            $consulta = mysqli_query($conn, $sql);
            while($dados = mysqli_fetch_array($consulta)){
                $descricao = $dados['descricao'];
                $quantidade = $dados['quantidade'];
          ?>
          ['<?php echo $descricao ?>',    <?php echo $quantidade ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'EPIs Cadastrados',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 500px; height: 500px;"></div>
  </body>
</html>
