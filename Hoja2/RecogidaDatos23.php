<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$columnas = $_REQUEST['columnas'];

echo "<table border=2>";

for($i = 1 ; $i <= $columnas ; $i++){
    
//    echo "<tr>";
    echo "<td>$i</td>";
//    echo "</tr>";
}