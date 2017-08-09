
<html>
<body>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Muestre los numeros pares.</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <h2>Ejercicio_6</h2>
 <h3>Algoritmo que muestre la tabla de multiplicar de cualquier numero.</h3>
 
<?php

for($tabla=6; $tabla<=6; $tabla++)
{
 echo "<h1>Tablas de multiplicar del $tabla </h1>";

for($i=0; $i<=12; $i++)

 {
  echo "$tabla x $i = ". ($tabla*$i) . "<br/>";

 }
}
?>
</body>
</html>
