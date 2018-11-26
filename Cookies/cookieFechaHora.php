<?php

//setcookie('contador',false);

if (isset($_COOKIE['fecha'])) {

    $fechaAntigua = unserialize($_COOKIE['fecha']);
    $mensaje = 'Fecha del : ' . $_COOKIE['contador'];
    
    $fechaNueva = getdate();
    setcookie('fecha', serialize($fecha));
    
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

