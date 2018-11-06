<?php

$pdo = new PDO ('mysql:host=localhost; dbname=discos','root','');

foreach($pdo->query("select nombre_disco, millones_vendidos from discos") as $row){
    
    echo $row['nombre_disco'].'==>'.$row ['millones_vendidos'].'<br/>';
    
}

?>