<html>
    <head>
        <title>Stock</title>
    </head>
    <body>

        <?php
        if (!$_POST) {

            include "stock.php";
            
        } else {

            include "stock.php";

            $dwes = new mysqli('localhost', 'root', '', 'dwes');
            $error = $dwes->connect_errno;

            if ($error == null) {

//    $producto = $_POST["producto"];
//
//    $resultado = $dwes->query("SELECT tienda, unidades FROM stock WHERE producto LIKE '$producto'");
//    echo "Se ha realizado la query SELECT: " . "$dwes->affected_rows" . "<br>";
//    foreach ($resultado as $array) {
//
//        echo "<br>";
//
//        foreach ($array as $key => $value) {
//
//            echo $key . " " . $value . " ";
//        }
//    }
                echo "<h1>Stock del producto en las tiendas</h1>";

                $valorIntroducido = $_POST["lista"];
                echo "El valor elegido fue " . $valorIntroducido . "<br>";

                $resultado = $dwes->query("SELECT * FROM stock WHERE producto LIKE '$valorIntroducido' ");
                echo "Se ha realizado la query SELECT: " . "$dwes->affected_rows" . "<br>";

                //$dwes->close();

                foreach ($resultado as $array) {

                    echo "<br>";

                    foreach ($array as $key => $value) {

                        echo $key . " " . $value . " ";
                    }
                }

                echo "<br>";
                echo "<br>";
            }
            ?>
            Tienda Central: <input type="text" name="numProducto" value="" /> unidades. 
           
            <input type="submit" value="Actualizar" name="actualizar" />
        <?php }
        ?>   

    </body>
    
</html>













