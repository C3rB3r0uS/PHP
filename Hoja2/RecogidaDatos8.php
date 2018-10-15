<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pies = $_REQUEST['pies'];
$pulgadas = $_REQUEST['pulgadas'];

$total = ($pies*12 + $pulgadas)*2.54;

echo "El total en centímetros es: " . $total;