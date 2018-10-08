<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$distancia = $_REQUEST['distancia'];
$distanciaAux = $distancia;
$kms = 0;
$mts = 0;
$cms = 0;

while($distanciaAux >= 100){
    
    $distanciaAux -= 100;
    $mts++;
  
}

$cms = $distanciaAux;

  while($mts >= 1000){
      
      
      $mts -= 100;
      $kms++;
      
  }
  
  echo $distancia . " es igual a " . $kms . " kilómetros, " . $mts . " metros y " . $cms . " centímetros";