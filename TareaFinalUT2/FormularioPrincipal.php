<html>
    <head>
        <title>Formulario principal</title>
    </head>
    <body>

        <h1>Introduce un nuevo USER</h1>

        <?php
        if (!$_POST) {

            include "Formulario.php";
            ?>

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
                    $correo => array($datosPersona, $pasaporte, $nacionalidad)
                );

                $s_users = serialize($users);

//                foreach ($users as $value) {
//                    foreach ($value as $valueAux) {
//
//                        echo "Datos contenidos " . $valueAux . "<br>";
//                    }
//                }
//
//                echo "Serializado: " . $s_users . "<br>";

                $array = unserialize($_POST["array"]);
                
                foreach ($array as $value) {
                    
                    echo "Impresión después de deserializar: " . $array;
                    
                }
            }
        }
        ?>

    </body>
</html>

