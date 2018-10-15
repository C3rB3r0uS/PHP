<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>

        <h1>Seleccione los artículos a comprar</h1>

        <?php if (!$_POST) { ?>

            <form action="<?= $_SERVER["PHP_SELF"] ?>"  method = "post">

                <input type ="checkbox" name ="brojo" value ="brojo" />Bolígrafo Rojo (35 cents)<br/>
                <input type ="checkbox" name ="bazul" value ="bazul" />Bolígrafo Azul (35 cents)<br/>
                <input type ="checkbox" name ="lapizgrueso" value ="lapizgrueso" />Lapicero Grueso (27 cents)<br/>
                <input type ="checkbox" name ="lapizfino" value ="lapizfino" />Lapicero fino (30 cents)<br/>
                <input type ="checkbox" name ="goma" value ="goma" />Goma de borrar (35 cents)<br/>
                <input type="submit" value ="Enviar"> <br/>

            </form>

            <?php
        } else {
            
            $total = 0;
            
            if(isset($_POST["brojo"])){
                
                $total = $total + 0.35;
                
            }
            
              if(isset($_POST["bazul"])){
                
                $total = $total + 0.35;
                
            }
            
              if(isset($_POST["lapizgrueso"])){
                
                $total = $total + 0.27;
                
            }
            
              if(isset($_POST["lapizfino"])){
                
                $total = $total + 0.30;
                
            }
            
              if(isset($_POST["goma"])){
                
                $total = $total + 0.35;
                
            }
            
            echo "Precio total: " . $total . " €";
            
        }
        ?>

    </body>
</html>


