<html>
    <head>
        <title>Sesion</title>
    </head>
    <body>
        
        <h1>Sesiones</h1>

        <form action="action">

            <input type="submit" value="Aceptar" name="aceptar" id="aceptar"/>
            <input type="reset" value="Borrar sesión" name="limpiar" id="limpiar"/>
            
            <?php
          
            if (isset($_POST["aceptar"])) {
                
                session_start();

                if (isset($_SESSION["ultima_visita"])) {
                    
                    echo "1";

                    echo "<p>Bienvenido a la página web.</p>";
                    $fecha = getdate();
                    $mensaje = "Última conexión: " . $fecha['mday'] . "/" . $fecha['mon'] . "/" . $fecha['year'] . " - " . $fecha['hours'] . ":" . $fecha['minutes'] . ":" . $fecha['seconds'];
                    $_SESSION["ultima_visita"] = $mensaje;
                } else {

                    echo "2";
                    
                    $fecha = getdate();
                    $mensaje = "Última conexión: " . $fecha['mday'] . "/" . $fecha['mon'] . "/" . $fecha['year'] . " - " . $fecha['hours'] . ":" . $fecha['minutes'] . ":" . $fecha['seconds'];
                    $_SESSION["ultima_visita"] = $mensaje;
                }
            }

            if (isset($_POST["limpiar"])) {
                
                echo "3";

                unset($_SESSION);
            }
            ?>

        </form>

    </body>
</html>


