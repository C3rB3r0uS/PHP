<?php

class circulo{
    
    private $radio;
    private $centro;
    
    public function __construct ($radio, $centro){
        
        $this->radio = $radio;
        $this->centro = $centro;
        
    }
    
    public function calcularPerimetro(){
        
        $radio = $this->radio;
        echo "El radio con el que se va a calcular es: " . $radio. "<br>";
        return 2*pi()*$radio;
        
    }
    
    public function calcularArea(){
        
        $radio = $this->radio;
        echo "El radio con el que se va a calcular es: " . $radio . "<br>";
        return pi()*($radio*$radio);
        
    }
    
}

$circulo = new circulo(3, 1);

echo "El área calculada es: " . $circulo->calcularArea() . "<br/>";
echo "El perímetro calculado es: " . $circulo->calcularPerimetro() . "<br/>";
