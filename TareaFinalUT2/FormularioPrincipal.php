<html>
    <head>
        <title>Formulario principal</title>
    </head>
    <body>

        <h1>Introduce un nuevo USER</h1>

        <?php if (!$_POST) { ?>

            <form action = "<?= $_SERVER["PHP_SELF"] ?>" method="POST">

                <strong>Dirección de correo electrónico:</strong><input type="text" name="correo" value="" /><br>
                <strong>Nombre y apellidos de la persona física:</strong><input type="text" name="datosPersona" value="" /><br>
                <strong>Número de pasaporte de la persona física titular:</strong><input type="text" name="pasaporte" value="" /><br>
                <strong>Nacionalidad de la persona física:</strong><input type="text" name="nacionalidad" value="" /><br>
                
                <input type = "hidden" name="array" value="$s_users"> 

                <input type="submit" value="Introducir" name="intro"/>

            </form>

            <?php
        } else {
            
            include "Formulario.php";
        
            $errores = [];

            if (isset($_POST["correo"]) && empty($_POST["correo"])) { // comprobación de que existe el campo correo (isset) y de que el campo está vacío (empty)
                $errores[] = "Debes de introducir un correo";
            }

            if ($errores) {

                foreach ($errores as $value) {

                    echo $value;
                }
            } else {

                $correo = $_POST["correo"];
                $datosPersona = $_POST["datosPersona"];
                $pasaporte = $_POST["pasaporte"];
                $nacionalidad = $_POST["nacionalidad"];
                
                $users = array(
                    
                    $correo => array($datosPersona,$pasaporte,$nacionalidad)
                    
                );
                
                echo "email introducido : ";
                
//                echo "Correo electrónico: " . $correo . "<br/>";
//                echo "Número de pasaporte: " . $pasaporte . "<br/>";
              
                $s_users = serialize($users);
                
            }
        }
        ?>

    </body>
</html>

