<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['tlf'];

        echo "Valor de código recogido: " . $codigo . "<br>";
        echo "Valor de nombre recogido: " . $nombre . "<br>";
        echo "Valor de teléfono recogido: " . $telefono . "<br>";

        $dwes = new mysqli('localhost', 'root', '', 'dwes');
        $error = $dwes->connect_errno;

        if ($error == null) {

            if (!empty($codigo) && !empty($nombre) && !empty($telefono)) {

                $resultado = $dwes->query("INSERT INTO tienda (cod,nombre,tlf) values ('$codigo', '$nombre', '$telefono')");
                echo   "Se ha realizado la query: " . "$dwes->affected_rows";
                
            }else if(!empty($codigo) && empty($nombre) && empty ($telefono)){
                
                $borrado = $dwes->query("DELETE FROM tienda WHERE cod = '$codigo'");
                echo "Se ha realizado la query: " . "$dwes->affected_rows";
                
            }

            $dwes->close();
        }
        ?>
    </body>
</html>
