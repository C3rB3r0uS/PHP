<html>
    <head>
        <title>Stock</title>
    </head>
    <body>

        <form action = "recogidaDatosStock.php" method="POST">

            <h1>Consulta de productos</h1>

<!--            <strong>Producto: </strong> <input type="text" name="producto" value="" />-->

            <!-- https://www.sitepoint.com/community/t/how-to-create-combo-box-in-php/7105 -->

            <?php
            $dwes = new mysqli('localhost', 'root', '', 'dwes');
            $error = $dwes->connect_errno;

            if ($error == null) {

                $listaProductos = $dwes->query("SELECT DISTINCT producto FROM stock");
//                echo "Se ha realizado la query SELECT: " . "$dwes->affected_rows" . "<br>";
//                print_r($listaProductos) . "<br>";

                echo '<select name="lista" id="lista">
	      <option value=" " selected="selected">Elige una opción</option>';

                foreach ($listaProductos as $value) {

                    foreach ($value as $key => $valueAux) {

                        echo "key => " . $key . " value => " . $valueAux . "<br>";
                        echo '<option value="' . $valueAux . '">' . $valueAux . '</option>';
                    }
                }

                echo '</select>';
            }
            ?>

            <input type="submit" value="Enviar"/>


        </form>

    </body>
</html>

