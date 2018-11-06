<html>
    <head>
        <title>Stock</title>
    </head>
    <body>

        <?php
        if (!$_POST) {

            include "consulta_tiendas.php";
            
        } else {

            include "consulta_tiendas.php";

           $pdo = new PDO('mysql:host=localhost; dbname=dwes','root','');
  
                echo "<h1>Stock del producto en las tiendas</h1>";

                $valorIntroducido = $_POST["lista"];
                echo "El valor elegido fue " . $valorIntroducido . "<br>";

                $resultado = $pdo->query("SELECT * FROM stock WHERE producto LIKE '$valorIntroducido' ");

              

                echo "<br>";
                echo "<br>";
            
            ?>
            Tienda Central: <input type="text" name="numProducto" value="" /> unidades. 
           
            <input type="submit" value="Actualizar" name="actualizar" />
        <?php }
        ?>   

    </body>
    
</html>














