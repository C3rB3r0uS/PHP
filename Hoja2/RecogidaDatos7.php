<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];

$total = $peso/pow(($altura/100),2);

echo "Tu IMC es de " . $total;
 