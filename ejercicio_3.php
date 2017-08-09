<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio_3</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  </head>
  <body>
    <div class="container">

      <h2>Ejercicio_3</h2>
      <br><br>
      <h3>Algoritmo que pida ingresar dos numeros y sume todos los numeros que van desde el primero al segundo numero</h3>
      <br><br>

        <form method="post">
        <label>Ingrese  primer numero:</label>
        <input type="number" name="num1" value="">
        <br>
        <br>
        <label>Ingrese segundo numero: &nbsp</label>
        <input type="number" name="numero2" value="">
        <br>
        <br>
        <input class="btn btn-target" type="submit" name="Enviar" value="Consultar">
        <hr>

      <h3>La suma de los numeros ingresados es</h3>
      <hr>
      <?php
        $numero1=$_POST['numero1'];
        $numero2=$_POST['numero2'];
        $suma=0;

        for($numero1=$numero1; $numero1 <= $numero2 ; $numero1++){
        echo "$numero1 &nbsp";

        $suma=$suma+$numero1;
        }
        echo "<h2>La suma de todos los numero es: $suma <br/></h2>";

       ?>
       <hr>

    </div>

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

  </body>
</html>
