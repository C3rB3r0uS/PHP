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
        $a = 12;
        $b = 9;
        $c = 1;

        $mayor = $a;

        if ($mayor < $b) {
            $mayor = $b;
        }

        if ($mayor < $c) {
            $mayor = $c;
        }

        print "El mayor entre " . $a . ", " . $b . " y " . $c . " es : " . $mayor;
        ?>
    </body>
</html>

