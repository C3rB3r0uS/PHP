<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$anio = $_REQUEST['anio'];

if(($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0){
    
    print $anio . " es bisiesto";
     
}else{
    
    print $anio . " no es bisiesto";
    
}