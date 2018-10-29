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
    
    $listaProductos = $dwes->query("SELECT DISTINCT producto FROM stock");
    echo "Se ha realizado la query SELECT: " . "$dwes->affected_rows" . "<br>";  
    
}







