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
            $sql = "SELECT COUNT(matricula)as quantidade,funcionarios.funcao FROM funcionarios GROUP BY funcao";
            $consulta = mysqli_query($conn, $sql);
            while($dados = mysqli_fetch_array($consulta)){
                $descricao = $dados['funcao'];
                $quantidade = $dados['quantidade'];
          ?>
          ['<?php echo $descricao ?>',    <?php echo $quantidade ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Funcionários Cadastrados Por Função',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d_funcao'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d_funcao" style="width: 400px; height: 400px;"></div>
  </body>
</html>