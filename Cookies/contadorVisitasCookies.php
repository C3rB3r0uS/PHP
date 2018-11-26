<?php

//setcookie('contador',false);

if (isset($_COOKIE['contador'])) {

    setcookie('contador', $_COOKIE['contador'] + 1);
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador'];
} else {

    // Caduca en una año
    setcookie('contador', 1);
    $mensaje = 'Bienvenido a nuestra página web';
}

?>

<html>
    <head>
        <title>Prueba de cookie</title>
    </head>
    <body>

        <p>
            <?php echo $mensaje; ?>
        </p>


    </body>
</html>


