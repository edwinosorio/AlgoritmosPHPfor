<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio_5</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  </head>
  <body>
    <div class="container">

      <h2>Ejercicio_5</h2>
       <h3>Algoritmo que pida un numero y muestre en pantalla el mismo numero de asteriscos.</h3>
      <form method="post">
        <label>Ingrese  numero: &nbsp &nbsp</label>
        <input type="number" name="numero1" value="">
        <br>
        <br>

        <input class="btn btn-target" type="submit" name="Enviar" value="Consultar">
        <hr>

      <h3>La suma de los numeros ingresados es</h3>
      <hr>
      <?php
        $numero1=$_POST['numero1'];
        for ($i=1; $i <= $numero1; $i++) {

          echo "* &nbsp";
        }

        ?>
       <hr>

    </div>

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

  </body>
</html>
