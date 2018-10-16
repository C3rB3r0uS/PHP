<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$segundos = $_REQUEST['segundos'];

$minutos = 0;
$segundosConversion = $segundos;

"<br>";

while ($segundosConversion > 60) {

    $segundosConversion = $segundosConversion - 60;
    $minutos = $minutos + 1;

}

echo $segundos . " segundos son " . $minutos . " minutos, " . $segundosConversion . " segundos";
