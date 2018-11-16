<?php

include ("includes/plantilla.php");
$titulo = "Inserción de contacto";
escribe_cabecera($titulo);
if(!$_POST){
    include "includes/formulario.php";
}else{
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $tlf = $_POST['tlf'];
    $direccion = $_POST['direccion'];
    
    $ssql="INSERT INTO contacto(nombre,email,tlf,direccion) VALUES ('$nombre','$email','$tlf','$direccion')";
    
    if(mysqli_query($conexion,$ssql)){
        
        echo "Contacto insertado";
        
    }else{
        
        echo "No inserte nada";
        echo "<br/>" . mysql_error($conexion);
        include ("includes/formulario.php");
        
    }
    
}

escribe_pie($conexion);
