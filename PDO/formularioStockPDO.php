<html>
    <head>
        <title>Stock</title>
    </head>
    <body>

        <form action = "<?= $_SERVER["PHP_SELF"] ?>" method="POST">

            <h1>Ejercicio: Consultas con PDO</h1>

            <!-- https://www.sitepoint.com/community/t/how-to-create-combo-box-in-php/7105 -->

            <?php
            
            $pdo = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
            $listaProductos = $pdo->query("SELECT DISTINCT producto FROM stock");

            echo "Producto: ";

            echo '<select name="lista" id="lista">';
            
            while($registro = $listaProductos->fetch()){
                
                echo '<option value="' . $registro["producto"] . '">' . $registro["producto"] . '</option>';
                
            }

//            foreach ($listaProductos as $value) {
//
//                foreach ($value as $key => $valueAux) {
//
//                    echo '<option value="' . $valueAux . '">' . $valueAux . '</option>';
//                }
//            }

            echo '</select>';
            ?>

            <br><br>
            <input type="submit" name="stock" value="Mostrar stock"/>
            <br><br>
            
            Tienda Central: <input type="text" name="numProducto" value="" /> unidades. 
             
             <br><br>

            <input type="submit" value="Actualizar" name="actualizar" />
            
        </form>

    </body>
</html>


