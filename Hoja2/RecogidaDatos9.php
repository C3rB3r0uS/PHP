<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$respuesta = $_REQUEST['segundos'];

$respuestaAux = $respuesta;
$segundos = 0;
$minutos = 0;

while($respuestaAux >= 60){
    
    $respuestaAux = $respuestaAux - 60;
    $minutos = $minutos + 1;
    
}

$segundos = $respuestaAux;

echo $respuesta . " segundos son en total " . $minutos . " minutos y " . $segundos . " segundos.";


