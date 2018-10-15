<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filas = $_REQUEST['filas'];

echo "<table border=2>";

for($i = 1 ; $i <= $filas ; $i++){
    
    echo "<tr>";
    echo "<td>$i</td>";
    echo "</tr>";
}

