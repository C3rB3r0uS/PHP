<html>
    <head>
        <title>title</title>
    </head>
    <body>

        <?php
        if (!$_POST) {

            include "ejercicio_1_cookie_formulario.php";
 
        } else {

            setcookie('colores',$_POST['colores']);
            include "ejercicio_1_cookie_formulario.php";
        }
        ?>

    </body>
</html>





