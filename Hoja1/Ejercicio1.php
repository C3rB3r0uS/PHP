<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $num1 = 1;
        $num2 = 9;

        $suma = $num1 + $num2;
        $producto = $num1 * $num2;
        $cociente = $num1 / $num2;
        $resto = $num1 % $num2;

        print "El valor de num1 es " . $num1 . "<br>";
        print "El valor de num2 es " . $num2 . "<br>";

        print "La suma de " . $num1 . " y " . $num2 . " es " . $suma . "<br>";
        print "El producto de " . $num1 . " y " . $num2 . " es " . $producto . "<br>";
        print "El cociente de " . $num1 . " y " . $num2 . " es " . $cociente . "<br>";
        print "El resto de dividir " . $num1 . " y " . $num2 . " es " . $resto . "<br>";
        ?>
    </body>
</html>
