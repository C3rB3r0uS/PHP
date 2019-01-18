<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class migasPan {

    private $caracter;
    private $listaLinks = array();

    public function __construct($caracter) {

        $this->caracter = $caracter;
    }

    public function agregaNodo($url, $texto) {

        $this->listaLinks[$url] = $texto;
    }
                  
    public function borraNodo() {

        array_pop($this->listaLinks);
    }

    public function imprimir() {

        foreach ($this->listaLinks as $key => $value) {

            echo "<a href='" . $value . "'>" . $key . "</a> " . $this->caracter;
  
        }
    }
}

$migas = new migasPan('>');
$migas->agregaNodo('Google','google.es');
$migas->agregaNodo('Wikipedia', 'wikipedia.com');
$migas->agregaNodo('Marca', 'marca.es');
echo "Imprimiendo por primera vez<br>";
$migas->imprimir();
echo "<br> Borrado del elemento <br>";
$migas->borraNodo();
$migas->imprimir();