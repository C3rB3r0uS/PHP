<?php

$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$fecha_nac = $_POST['fecha_nac'];
$grupo = $_POST['grupo'];

$pdo = new PDO('mysql:host=localhost; dbname=discos', 'root', '');

$resultado = $pdo->query("SELECT MAX(cod_musico) FROM musicos");
$maximo = $resultado->fetch();
$maximo_cod = $maximo[0];

$nuevo_cod_musico = $maximo_cod + 1;

$sql = $pdo->prepare("INSERT INTO musicos VALUES (:cod, :nombre, :pais, :fc, :grupo)");

$sql->bindParam(':cod', $nuevo_cod_musico);
$sql->bindParam(':nombre', $nombre);
$sql->bindParam(':pais', $pais);
$sql->bindParam(':fc', $fecha_nac);
$sql->bindParam(':grupo', $grupo);

$sql->execute();
?>

