<?php

class select_element {

    private $options;

    public function __construct($options) {

        $this->options = $options;
    }

    public function mostrarElemento() {

        echo "---- IMPRIMIENDO SELECT ---- <br><br>";

        echo "<select>";

        foreach ($this->options as $key => $value) {

            echo "<option value='" . $key . "'>" . $value . "</option>";
        }

        echo "</select>";
    }

}

$opciones = array();
$opciones["rojo"] = "Rojo";
$opciones["azul"] = "Azul";
$opciones["verde"] = "Verde";

$elemento = new select_element($opciones);
$elemento->mostrarElemento();
