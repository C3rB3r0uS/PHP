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
        <table border>

            <?php
            echo "<table border=2>";
            for ($i = 1; $i <= 4; $i++) {

                for ($j = 1; $j <= 4; $j++) {

                    $valor = pow($i,$j);
                    
                    echo "<td>La potencia es $valor</td>";
                  
                }
                echo "</tr>";
            }
            ?>

        </table>

    </body>
</html>

