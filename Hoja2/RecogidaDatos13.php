<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$num3 = $_REQUEST['num3'];

$contador = 0;

if ($num1 == $num2 || $num1 == $num3) {

    $contador += 1;
}

if ($num2 == $num1 || $num2 == $num3) {

    $contador += 1;
}

switch ($contador) {

    case 0:

        print "Todos los números son diferentes <br>";
        break;

    case 1:

        print "Hay al menos dos números repetidos";
        break;

    case 2:

        print "Todos los números son iguales";
        break;
}