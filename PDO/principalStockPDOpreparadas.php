<html>
    <head>
        <title>Stock</title>
    </head>
    <body>

        <?php
        if (!$_POST) {

            include "formularioStockPDO.php";
        } else {

            include "formularioStockPDO.php";

            if (isset($_POST['stock'])) {

                echo "<h1>Stock del producto en las tiendas</h1>";

                $pdo = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
                $productoElegido = $_POST["lista"];
                echo "El valor elegido fue " . $productoElegido . "<br>";

                $resultado = $pdo->prepare("SELECT * FROM stock WHERE producto LIKE ?");
                $resultado->bindParam(1, $productoElegido);
                $resultado->execute();

                while ($registro = $resultado->fetch()) {

                    echo "Producto: " . $registro['producto'] . " Tienda: " . $registro['tienda'] . " Unidades: " . $registro['unidades'] . "<br/>";
                }

                echo "<br>";
            }

            if (isset($_POST['actualizar'])) {

                $pdo = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
                
                $productoElegido = $_POST["lista"];
                $unidadesIntroducidas = $_POST['numProducto'];

                $resultado = $pdo->prepare("SELECT * FROM stock WHERE producto LIKE ?");
                $resultado->bindParam(1, $productoElegido);
                $resultado->execute();

                $contiene = false;

                while ($registro = $resultado->fetch()) {

                    if ($registro['tienda'] == 1) {

                        $contiene = true;
                    }
                }

                if ($contiene == true) {

                    $actualizar = $pdo->prepare("UPDATE stock SET unidades=? WHERE producto=? AND tienda=1");
                    $actualizar->bindParam(1, $unidadesIntroducidas);
                    $actualizar->bindParam(2, $productoElegido);
                    $actualizar->execute();
                    
                    $filasModificadas = $actualizar->rowCount();
                    echo "Se ha/n modificado $filasModificadas registro/s";
                    
                } else {

                    $insertar = $pdo->prepare("INSERT INTO stock values(?,1,?)");
                    $insertar->bindParam(1, $productoElegido);
                    $insertar->bindParam(2, $unidadesIntroducidas);
                    $insertar->execute();
                    
                    $filasModificadas = $insertar->rowCount();
                    echo "Se ha/n insertado $filasModificadas registro/s";
                    
                }
            }
            ?>
        <?php }
        ?>   

    </body>

</html>















