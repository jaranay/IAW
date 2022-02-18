<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php

/*
2. Imprime en pantalla el cuadrado de los números del 1 al 50, ambos incluidos, y los sume, devolviendo la dicha suma total.
*/

$suma = 0;

echo "El cuadrado es: " . "<br>";
    
        for ($i = 1; $i <= 50; $i++) {
            $suma = $suma + $i**2;          
            echo $i**2 . "<br>";

    }
            echo "Suma total: " . $suma;
 ?>
</body>

