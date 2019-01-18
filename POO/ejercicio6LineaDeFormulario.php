<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "ejercicio6.php";

class lineaDeFormulario{
    
    private $nombreCampo;
    private $campo;
     
    function __construct($nombreCampo,$campo) { 
        
        $this->nombreCampo=$nombreCampo;
        $this->campo=$campo;
        
    }
    
    public function imprimir() {
        
        if($this->campo instanceof SelectRadio){
            
            $campoFormulario = $this->campo;
            
            echo "<p>";
            echo "<label><b>".$this->nombreCampo."</b></label>";
            echo "<span>".$campoFormulario-> imprimir()."</span>";
            echo "</p>";
            
        }
        
    }

}

$campo = array();
$campo["rojo"] = "Rojo";
$campo["azul"] = "Azul";
$campo["verde"] = "Verde";

$selectRadio = new SelectRadio($opciones);

$lineaDeFormulario = new lineaDeFormulario("Colores", $selectRadio);
$lineaDeFormulario->imprimir();

