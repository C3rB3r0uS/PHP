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

                $resultado = $pdo->query("SELECT * FROM stock WHERE producto LIKE '$productoElegido'");

                while ($registro = $resultado->fetch()) {

                    echo "Producto: " . $registro['producto'] . " Tienda: " . $registro['tienda'] . " Unidades: " . $registro['unidades'] . "<br/>";
                }

                echo "<br>";
            }
            
            if(isset($_POST['actualizar'])){
                
                 $pdo = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
                 $productoElegido = $_POST["lista"];
                 $unidadesIntroducidas = $_POST['numProducto'];
                 
                 $resultado = $pdo->query("SELECT * FROM stock WHERE producto LIKE '$productoElegido'");
                 
                 $contiene = false;
                 
                 while($registro = $resultado->fetch()){
                     
                     if($registro['tienda'] == 1){
                         
                         $contiene = true;
                         
                     }
                     
                 }
                 
                 if($contiene == true){
                     
                     $actualizar = $pdo->exec("UPDATE stock SET unidades='$unidadesIntroducidas' WHERE producto='$productoElegido' AND tienda=1");
                     echo "Se han modificado $actualizar registro/s";
                     
                 }else{
                     
                     $insertar = $pdo->exec("INSERT INTO stock values('$productoElegido',1,'$unidadesIntroducidas')");
                     echo "Se han insertado $insertar registro/s";
                     
                 }
                
            }
            
            ?>
        <?php }
        ?>   

    </body>

</html>














