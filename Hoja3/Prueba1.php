<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba 1</title>
    </head>
    <body>
        
        <h1>Formulario ejemplo</h1>

         <?php if (!$_POST) { ?>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?> " method ="post">
        <p>
            <label for = "nombre">Nombre</label>
            <input type = "text" name ="nombre" value="">
        </p>
        <p>
            <label for = "nombre">Email</label>
            <input type = "email" name ="email">
        </p>
        <p>
            <label for = "clave1">Clave</label>
            <input type = "password" name ="clave1">
        </p>
        <p>
            <label for = "clave2">Repetir clave</label>
            <input type = "password" name ="clave2">
        </p>
        <p>
            <label>
                <input type = "submit" value ="Enviar">
            </label>

        </p>

    </form>

        <?php
 
    } else {
        
         function mostrar_errores($errores){
            echo "<ul>";
            foreach ($errores as $error){
                echo "<li>$error<li>";
            }
            echo "</ul>";
        }
        
        if(!isset($_POST["nombre"])){
            $errores[] = "No se ha recibido nombre";
        }elseif(strlen ($_POST["nombre"]) < 3){
            $errores[] = "Campo demasiado corto";
        }
    
        if(!isset($_POST["email"])){
            $errores[] = "No he recibido el email";
        }elseif (strlen($_POST["email"]) < 6){
            $errores [] = "El email no puede ser válido";
        }
        
        if(!isset($_POST["clave1"]) || !isset($POST["clave2"])){
            $errores [] = "No he recibido ambas claves";
        }else{
            if(strlen($_POST["clave1"]) < 5){
                $errores [] = "La clave debe de tener más de 5 caracteres";
            }
            if($_POST["clave1"] != $_POST["clave2"]){
                $errores[] = "Las claves tienen que ser iguales";
            }
        }
        
        if($errores){
            mostrar_errores($errores);
            echo '<br><a href= " ' . $_SERVER["PHP_SELF"] . ' " >';
        }else {
            echo "Todo bien, registro ese usuario";
        }
        
    }
    ?>

</body>
</html>
