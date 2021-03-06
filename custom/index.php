<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Refresh" content="60">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

  </head>
  <body>
<div class="container-fluid">
  <div class="row">
    <br>
  </div>

  <div class="row">

    <div class="col">
      <!-- GLOBAL STATS --> 
      <div class="row" align="center">
          <?php 
             include '../config/view_stats_alert.php';
          ?>
      </div>  
<!--           <div class="col-3">
          <?php 
             // include '../config/view_estados_graph.php';
          ?>
          </div> -->
    </div>   

    <!-- TIPO REQUERIMIENTO --> 
    <div class="col col-lg-3">
        <?php 
           include '../config/view_tipo_req.php';
        ?>
    </div>
  </div>

  <div class="row">
    <br>
  </div>

  <!-- TOP 10 ULTIMAS SOLICITUDES --> 
  <div class="row">
    <div class="col">
      <?php 
        include '../config/view_estados_top10_req.php';
      ?>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>