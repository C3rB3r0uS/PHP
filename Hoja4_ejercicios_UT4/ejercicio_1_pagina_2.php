<?php

if (isset($_POST['submit'])) {

    $eleccion = $_POST['colores'];

    switch ($eleccion) {
        case 'Azul':
            echo '<body style="background-color:blue">';
            break;
        case 'Rojo':
            echo '<body style="background-color:red">';
            break;
        case 'Verde':
            echo '<body style="background-color:green">';
            break;
        case 'Amarillo':
            echo '<body style="background-color:yellow">';
            break;
    }
}
?>



