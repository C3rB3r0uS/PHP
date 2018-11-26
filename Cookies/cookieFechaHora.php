<?php

//setcookie('fecha', false);

setcookie('contador',false);

if (isset($_COOKIE['fecha'])) {

    $fechaAntigua = unserialize($_COOKIE['fecha']);
    $mensaje = "Última conexión: " . $fechaAntigua['mday'] . "/" . $fechaAntigua['mon'] . "/" . $fechaAntigua['year'] ." - ".$fechaAntigua['hours'] . ":" . $fechaAntigua['minutes'] . ":" . $fechaAntigua['seconds'];
    
    $fechaNueva = getdate();
    setcookie('fecha', serialize($fechaNueva));
    
} else {

    // Caduca en una año
    $fecha = getdate();
    setcookie('fecha', serialize($fecha));
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

