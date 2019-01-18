<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class freelance{
    
    private $nombre;
    private $ocupado;
    private $precioHora;
    private $comienzoTrabajo;
    
    public function __construct($nombre,$precioHora) {
        
        $this->nombre = $nombre;
        $this->precioHora = $precioHora;
        $this->ocupado = false;
        
    }
    
    // Paso la fecha de comienzo en un array. Si tiene contenido, uso esa fecha, si no, uso el tiempo actual restándole 3 
    // tal y como dice el ejercicio.
    
    public function desarrollar($arrayDiaComienzo){
        
        if($this->ocupado == false){
            
            $this->ocupado = true;
            
            if($arrayDiaComienzo){
                
                $this->comienzoTrabajo = $arrayDiaComienzo[0];
                         
            }else{
                
                $fechaComienzo = getdate();
                $this->comienzoTrabajo = $fechaComienzo['mday']-3;
                
            }    
                           
        }
                
    }
    
    public function parar(){
        
        if($this->ocupado == true){
            
            $this->ocupado = false;
         
            $fechaActual = getdate();
            $diaActual = $fechaActual['mday'];
            
            $diasDeTrabajo = $diaActual - $this->comienzoTrabajo;
            $facturaTotal = $diasDeTrabajo * 24 * $this->precioHora;
            
            echo "La factura es (suponiendo que trabaje las 24h del día): " . $facturaTotal ."€";
            
        }
        
    }
    
    function getInfo(){
        
        echo "<h1>Datos del trabajador</h1><br>";
        
        echo "Nombre del trabajador: " . $this->nombre . "<br>";
        echo "¿ Está ocupado ?: ";
        echo $this->ocupado ? "Sí":"No" ;
        echo "<br>";
        echo "Precio/hora: " . $this->precioHora . "<br>";
        echo "Día de comienzo: " . $this->comienzoTrabajo . "<br>";
        
    }
    
}

$freelance = new freelance('Pedro', 10);
$freelance->ocupacion="Diseñador Web";

$dia = array();
$freelance->desarrollar($dia);

$freelance->getInfo();
//echo "Ocupación: " . $ocupacion;
$freelance->parar();

