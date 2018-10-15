<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pies = $_REQUEST['pies'];
$pulgadas = $_REQUEST['pulgadas'];

echo "Pies introducidos: " . $pies . "<br>";
echo "Pulgadas introducidas: " . $pulgadas . "<br>";

$totalPulgadas = $pies*12 + $pulgadas; 

echo "Total pulgadas: " . $totalPulgadas . "<br>";

echo "La conversión es " . $totalPulgadas*2.54 . "<br>";