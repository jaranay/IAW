<!DOCTYPE html>
<html>
    <head>
        <title>Jaranay</title>
    </head>
    <body>
<?php

/*
1. Imprime en pantalla  los números impares del 1 al 100, y su suma.
*/

    echo "Impares\n";
        for ($i = 1; $i < 100; $i = $i + 2) {
            echo "<p>$i</p>\n";

    }
    
    echo "Sumamos\n";    
        for ($i = 1; $i < 100; $i = $i + 2) {
        $sum = $sum + $i;

    }

    echo "$sum";
?>
    
    </body>
</html>