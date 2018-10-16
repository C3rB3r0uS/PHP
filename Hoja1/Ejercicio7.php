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
            for ($i = 0; $i < 5; $i++) {
                for ($j = 0; $j < 5; $j++) {
                    if ($i == 0 && $j != 0) {
                        echo "<td>0,$j</td>";
                    } else {
                        $valor = $i + $j * 0.1;
                        echo "<td>$valor</td>";
                    }
                }
                echo "</tr>";
            }
            ?>

        </table>

    </body>
</html>