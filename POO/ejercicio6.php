<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Select {

    public $opciones = array();

    public function __construct($opciones) {

        $this->opciones = $opciones;
    }

    abstract function imprimir();

//    function imprimir(){
//        
//        echo "<select>";
//        
//        foreach ($this->opciones as $key => $value) {
//            
//            echo "<option value='". $key . "'>" . $value . "</option>";
//            
//        }
//        
//        echo "</select>";
//        
//    }
//    
}

class SelectRadio extends Select{
    
    function __construct($opciones) {
        
        parent::__construct($opciones);
        
    }

    public function imprimir() {
                
        echo "<form>";
        
        foreach ($this->opciones as $key => $value) {
            
            echo "<input type='radio' name='opciones' value='" . $key . "'>" . $value . "</br>";
            
        }
        
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        
    }
    
}

$opciones = array();
$opciones["rojo"] = "Rojo";
$opciones["azul"] = "Azul";
$opciones["verde"] = "Verde";

$selectRadio = new SelectRadio($opciones);
$selectRadio->imprimir();