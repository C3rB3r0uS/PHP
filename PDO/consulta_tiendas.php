<html>
    <head>
        <title>Stock</title>
    </head>
    <body>

        <form action = "<?= $_SERVER["PHP_SELF"] ?>" method="POST">

            <h1>Ejercicio: Consultas con PDO</h1>

<!--            <strong>Producto: </strong> <input type="text" name="producto" value="" />-->

            <!-- https://www.sitepoint.com/community/t/how-to-create-combo-box-in-php/7105 -->

            <?php
            $dwes = new mysqli('localhost', 'root', '', 'dwes');
            $error = $dwes->connect_errno;

            if ($error == null) {             

                $listaProductos = $dwes->query("SELECT DISTINCT producto FROM stock");
//                echo "Se ha realizado la query SELECT: " . "$dwes->affected_rows" . "<br>";
//                print_r($listaProductos) . "<br>";
                
                $dwes->close();
      
                echo "Producto: ";

                echo '<select name="lista" id="lista">';

                foreach ($listaProductos as $value) {

                    foreach ($value as $key => $valueAux) {

                        echo '<option value="' . $valueAux . '">' . $valueAux . '</option>';
                    }
                }

                echo '</select>';
            }
            ?>

            <input type="submit" name="stock" value="Mostrar stock"/>
     
        </form>

    </body>
</html>


