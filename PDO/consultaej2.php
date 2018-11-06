<?php

$numero = $_POST['codigo'];

$pdo = new PDO('mysql:host=localhost; dbname=discos','root','');

$fila = $pdo->query("select nombre_musico, pais, fecha_nacimiento from musicos where cod_musico = ".$numero);

$resultado=$fila->fetch();

$nombre_musico = $resultado["nombre_musico"];
$pais = $resultado["pais"];
$fecha_nacimiento = $resultado["fecha_nacimiento"];

print "<p>El músico con el código <".$numero."> se llama " .$nombre_musico. " y es de " .$pais;

?>

