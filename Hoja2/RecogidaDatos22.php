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
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        $valor = $_REQUEST['cantidad'];
        ?>

        <form action="RecogidaDatos22.php" method="get">

            for ($i = 1; $i <= $valor; $i++){
            
            $cantidad = "cantidad" . $i;

            <input type = "text" name = $cantidad><br>

            }

            Escribe cuántos valores quieres introducir<br> 

            Cantidad:  <input type="text" name = "cantidad"><br>

            <input type="submit" value="Calcular entrada">

        </form>

    </body>
</html>