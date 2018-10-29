<?php

$dwes = new mysqli('localhost', 'root', '', 'dwes');
$error = $dwes->connect_errno;

if ($error == null) {

//    $producto = $_POST["producto"];
//
//    $resultado = $dwes->query("SELECT tienda, unidades FROM stock WHERE producto LIKE '$producto'");
//    echo "Se ha realizado la query SELECT: " . "$dwes->affected_rows" . "<br>";
//    foreach ($resultado as $array) {
//
//        echo "<br>";
//
//        foreach ($array as $key => $value) {
//
//            echo $key . " " . $value . " ";
//        }
//    }

    $valorIntroducido = $_POST["lista"];
    echo "El valor elegido fue " . $valorIntroducido . "<br>";

    $resultado = $dwes->query("SELECT * FROM stock WHERE producto LIKE '$valorIntroducido' ");
    echo "Se ha realizado la query SELECT: " . "$dwes->affected_rows" . "<br>";

    foreach ($resultado as $array) {

        echo "<br>";

        foreach ($array as $key => $value) {

            echo $key . " " . $value . " ";
        }
    }
}







