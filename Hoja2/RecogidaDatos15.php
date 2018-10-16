<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$temperatura = $_REQUEST['temperatura'];
$valor = $_REQUEST['Temperatura'];

if ($valor == "celsius") {
    
    $temperatura = ($temperatura - 32) * 5/9;
    echo $temperatura . " grados Farenheit";
    
} else {
    
   $temperatura = ($temperatura * 9/5) + 32;
    echo $temperatura . " grados Celsius";
    
}