<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dividendo = $_REQUEST['dividendo'];
$divisor = $_REQUEST['divisor'];

$dividendoAux = $dividendo;
$cociente = 0;
$resto = 0;

$i = 0;

while ($dividendoAux > $divisor) {
 
    $dividendoAux = $dividendoAux - $divisor;
    $cociente += 1;

    
}

$resto = $dividendoAux;

echo "Dividendo: " . $dividendo . " cociente: " . $cociente . "<br>";

if($resto != 0){
    
    echo "La división no es exacta: " . "<br>";
    echo "Cociente: " . $cociente . " Resto: " . $resto;
  
}else{
    
    echo "La división es exacta: " . "<br>";
    echo "Cociente: " . $cociente . " Resto: " . $resto;
    
}

