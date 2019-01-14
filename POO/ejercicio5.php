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
    
    public function __construct($nombre,$ocupado,$precioHora,$comienzoTrabajo) {
        
        $this->nombre = $nombre;
        $this->ocupado = $ocupado;
        $this->precioHora = $precioHora;
        $this->comienzoTrabajo = $comienzoTrabajo;
        
    }
    
    public function desarrollar(){
        
        
    }
    
    public function parar(){
        
        
        
    }
    
}
