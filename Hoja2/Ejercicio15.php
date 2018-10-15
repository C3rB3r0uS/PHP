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

        <form action="RecogidaDatos15.php" method="get">

            Escribe una temperatura (en grados Celsius o Farenheit) y la convertiré a la otra unidad (Farenheit o Celsius) <br> 

            Temperatura:  <input type="text" name = "temperatura"><br>

            <select name="Temperatura"> 
                <option value="celsius">Celsius</option>
                <option value="farenheit">Farenheit</option>
            </select>

            <input type="submit" value="Convertir">

        </form>

    </body>
</html>
