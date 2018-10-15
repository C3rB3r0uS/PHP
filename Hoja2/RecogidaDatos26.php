<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Reutilizo código de ejercicio 21

$valor = $_REQUEST['numero'];

for($k = 1; $k <= $valor ; $k++){
    
    echo "Tabla del " . $k;

$filas = $k;
$columnas = $filas;
echo "<table border=2>";
for ($i = 1; $i <= $columnas + 1; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $filas + 1; $j++) {
        if ($i == 1 && $j == 1) {
            echo "<td><b>x</b></td>";
        } else if ($i == 1) {
            $mostrar = $j - 1;
            echo "<td><b>$mostrar</b></td>";
        } else if ($j == 1) {
            $mostrar = $i - 1;
            echo "<td>$mostrar</td>";
        } else {
            $mostrari = $i - 1;
            $mostrarj = $j - 1;
            $resultado = $mostrari * $mostrarj;
            echo "<td>$resultado</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

}
