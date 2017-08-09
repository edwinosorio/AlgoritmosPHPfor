<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio_4</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  </head>
  <body>
    <div class="container">

      <h2>Ejercicio_4</h2>
      <h3>Algoritmo que pida dos numeros y multiplique todos los numeros que van desde el primero hasta el segundo.</h3>
      <form method="post">
        <label>Ingrese primer numero: &nbsp &nbsp</label>
        <input type="number" name="numero1" value="">
        <br>
        <br>
        <label>Ingrese segundo numero: &nbsp</label>
        <input type="number" name="numero2" value="">
        <br>
        <br>
        <input class="btn btn-target" type="submit" name="Enviar" value="Consultar">
        <hr>

      <h3></h3>
      <hr>
      <?php
        $numero1=$_POST['numero1'];
        $numero2=$_POST['numero2'];
        $multiplicacion=1;

        for($numero1=$numero1; $numero1 <= $numero2 ; $numero1++){
        echo "$numero1 &nbsp";

        $multiplicacion=$multiplicacion*$numero1;
        }
        echo "<h2>La multiplicacion de los numero ingresados es: $multiplicacion <br/></h2>";

       ?>
       <hr>

    </div>

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

  </body>
</html>
