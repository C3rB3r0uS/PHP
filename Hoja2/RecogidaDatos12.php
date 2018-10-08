<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];

$mayor = 0;
$menor = 0;

if ($num1 >= $num2) {

    $mayor = $num1;
    $menor = $num2;
} else {

    $mayor = $num2;
    $menor = $num1;
}

if($mayor % $menor == 0){
    
    print $mayor . " es múltiplo de " . $menor;
    
}else{
    
    print $mayor . " no es múltiplo de " . $menor;
    
}
