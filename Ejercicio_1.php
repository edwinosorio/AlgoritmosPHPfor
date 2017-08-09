<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Muestre los numeros pares.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

      <h3>Algoritmo que pida dos numeros y muestre todos los numeros pares que van desde el primero hasta el segundo.</h3>

      <?php
      for ($i=6; $i<=50; $i++) {

        if ($i%2==0) {
          
          echo "<h2>$i &nbsp</h2>";
        }
      }
       ?>

    </div>
  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
