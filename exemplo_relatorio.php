<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAI - Serviços</title>
    <link href="scripts/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
          background-color: #08546c;
         }
    .header {
      float: right;
    }
    .letra {
      font-size: small;
    }
</style>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap5/js/bootstrap.min.js"></script>
    <div class="container-fluid">
      <img src="imagens/senainegativo.png" width="20%" height="20%">
      <?php
      echo "<div class='header'>";
      if (empty($_SESSION["user"])){
        echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='white' class='bi bi-person-square' viewBox='0 0 16 16'>
        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
        <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z'/>
      </svg> <a href='log.php' style='color: white; text-decoration: none; font-weight: bold;'>Login | </a>";
        echo "<a href='sair.php' style='color: white; text-decoration: none; font-weight: bold;'> Sair</a>";
      }
      else {
        $usuario = $_SESSION["user"];
        echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='white' class='bi bi-person-square' viewBox='0 0 16 16'>
        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
        <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z'/>
      </svg><b><font color='white'> ".$usuario." | </font></b>";
        echo "<a href='sair.php' style='color: white; text-decoration: none; font-weight: bold;'> Sair</a>";
      }
      echo "</div>";
      ?>
      <hr>
      <nav>
        <?php
          include 'menu.php';
        ?>
      </nav>
      <br>
      <center>
      <h1><p class="text-white">Relatórios</p></h1>
      <a href="inventario.php"><button type="button" class="btn btn-outline-light">Voltar</button></a>
      </center>
      <br>
      <div class="row row-cols-2 row-cols-md-1 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><b><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-calendar2-check" viewBox="0 0 16 16">
            <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
            </svg>&nbsp;&nbsp;Relatórios</b></h4>
          </div>
          <div class="card-body" style="text-align: left;">
              <form name="nome_grupo" action="gerarel.php" method="POST">
                        <?php
                            include 'conecta.php';
                            $pesquisa = mysqli_query($conn, "SELECT * FROM grupo GROUP BY nome_grupo");
                            $row = mysqli_num_rows($pesquisa);
                            if($row > 0){
                                echo '<label for="grupos"><b>Selecione um grupo:</b></label>';
                                echo '&nbsp;&nbsp;<select name="grupos" id="grupo">';
                                    echo '<option value="" selected>Escolha um Grupo</option>';
                                 while($registro = $pesquisa-> fetch_array()){
                                    echo '<option value="'.$registro['nome_grupo'].'">'.$registro['nome_grupo'].'</option>';
                                 }
                                 echo '</select>';
                                 echo '&nbsp;&nbsp;<input type="submit" class="btn btn-outline-success btn-sm" value="Imprimir"/><br/><br/>';
                                }
                                else {
                                    echo "<b>Não há grupos formados!</b>";
                                }
                                mysqli_close($conn);
                        ?>
              </form>
            <button class="btn btn-outline-success btn-sm" onclick="location.href='gerarpdf.php'">Imprimir todos os computadores</button><br/><br/>
            <button type="button" class="w-100 btn btn-lg btn-outline-secondary" onclick="location.href='inventario.php'"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16">
            <path d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
            <path d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z"/>
            </svg><b>Voltar</b></button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>