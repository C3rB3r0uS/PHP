<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>

        <h1>Formulario</h1>

        <?php if (!$_POST) { ?>

            <form action="<?= $_SERVER["PHP_SELF"] ?> " method ="post">
                <p>
                    <label for = "nombre">Nombre</label>
                    <input type = "text" name ="nombre" value="">
                </p>
                <p>
                    <label for = "apellidos">Apellidos</label>
                    <input type = "text" name ="apellidos">
                </p>
                <p>
                    <label for = "edad">Edad</label>
                    <input type = "text" name ="edad">
                </p>
                <p>
                    <label for = "salario">Salario</label>
                    <input type = "text" name ="salario">
                </p>
                <p>
                    <label>
                        <input type = "submit" value ="Enviar">
                    </label>

                </p>

            </form>

            <?php
        } else {

//            function mostrar_errores($errores) {
//                echo "<ul>";
//                foreach ($errores as $error) {
//                    echo "<li>$error<li>";
//                }
//                echo "</ul>";
//            }

//            if (!isset($_POST["nombre"])) {
//                $errores[] = "No se ha recibido nombre";
//            }
//
//            if (!isset($_POST["apellidos"])) {
//                $errores[] = "No se han recibido los apellidos";
//            }
//
//            if (!isset($_POST["edad"])) {
//                $errores[] = "No se ha recibido la edad";
//            } else {
//
//                if ($_POST["edad"] < 18) {
//
//                    $errores[] = "La edad debe ser mayor o igual a 18";
//                }
//            }
//
//            if (!isset($_POST["salario"])) {
//                $errores[] = "No se ha recibido el salario";
//            } else {
//
//                if ($_POST["salario"] < 0) {
//
//                    $errores[] = "El salario debe ser mayor que 0";
//                }
//            }
//
//            if ($errores) {
//                mostrar_errores($errores);
//                echo '<br><a href= " ' . $_SERVER["PHP_SELF"] . ' " >';
//            } else {

                $nombre = $_POST["nombre"];
                $apellidos = $_POST["apellidos"];
                $edad = $_POST["edad"];
                $salario = $_POST["salario"];

                $nuevoSalario = 0;

                if ($salario < 1000) {

                    if ($edad < 30) {
                        $nuevoSalario = 1100;
                    } else if ($edad > 30 && $edad < 45) {
                        $nuevoSalario = $salario + ($salario * 0.3);
                    } else {
                        $nuevoSalario = $salario + ($salario * 0.15);
                    }
                }else if($edad > 45 && $salario > 1000 && $salario < 2000){
                    
                    $nuevoSalario = $salario + ($salario*0.03);
                    
                }else{
                    
                    $nuevoSalario = $salario + ($salario*0.1);
                    
                }
                
                echo $nombre . " " . $apellidos . " , tu salario será de " . $nuevoSalario;
                
            }
        
        ?>

    </body>
</html>

