<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class enlace {

    private $texto;
    private $url;

    public function __construct($texto, $url) {

        $this->texto = $texto;
        $this->url = $url;
    }

    public function getEnlace() {

        $url = $this->url;
        $texto = $this->texto;
        
        echo "URL obtenida: " . $url . "<br>";
        echo "Texto obtenido: " . $texto . "<br>";

        echo "<a href='" . $url . "'>" . $texto . "</a";
    }

}

$link = new Enlace ('Pinche aquí','google.com');

$link ->getEnlace();