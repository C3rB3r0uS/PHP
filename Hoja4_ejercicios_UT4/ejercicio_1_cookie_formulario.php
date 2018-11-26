<html>
    <head>
        <title>title</title>
    </head>
    <body>

        <h1>Elección de color</h1>

        <p>Elija un color: </p>

        <form action= "<?php $_SERVER["PHP_SELF"] ?>" method="POST">

            <select id="colores" name="colores">
                <option>Azul</option>
                <option>Rojo</option>
                <option>Verde</option>
                <option>Amarillo</option>
            </select>

            <br/><br/>
            
            <input type="submit" value="Intro" name="intro" />

        </form>
        
        <a href="ejercicio_1_pagina_2_cookie.php">Segunda página</a>

    </body>
</html>


