<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>

        <h1>Consulta de clasificación</h1>

        <?php if (!$_POST) { ?>

            Seleccione una opción: 

            <form action="<?= $_SERVER["PHP_SELF"] ?>" method = "post">

                <select name="equipos">
                    <option>Alavés</option>
                    <option>Athletic de Bilbao</option>
                    <option>Atlético de Madrid</option>
                    <option>Barcelona</option>
                    <option>Betis</option>
                    <option>Celta</option>
                    <option>Eibar</option>
                    <option>Espanyol</option>
                    <option>Getafe</option>
                    <option>Girona</option>
                    <option>Huesca</option>
                    <option>Leganés</option>
                    <option>Levante</option>
                    <option>R. Sociedad</option>
                    <option>Rayo Vallecano</option>
                    <option>Real Madrid</option>
                    <option>Sevilla</option>
                    <option>Valencia</option>
                    <option>Valladolid</option>
                    <option>Villarreal</option>
                </select>

                <input type="submit" value="Comprobar" name="comprobar" />

            </form>

            <?php
        } else {

            $equipos = array(
                "Alavés" => 14,
                "Athletic de Bilbao" => 7,
                "Atlético de Madrid" => 15,
                "Barcelona" => 15,
                "Betis" => 12,
                "Celta" => 10,
                "Eibar" => 10,
                "Espanyol" => 14,
                "Getafe" => 9,
                "Girona" => 9,
                "Huesca" => 5,
                "Leganés" => 7,
                "Levante" => 10,
                "R. Sociedad" => 11,
                "Rayo Vallecano" => 5,
                "Real Madrid" => 14,
                "Sevilla" => 16,
                "Valencia" => 9,
                "Valladolid" => 12,
                "Villarreal" => 8
            );

            $valor = $_POST["equipos"];
            $aux = 1;

            arsort($equipos); // Ordena el array de mayor a menor, teniendo en cuenta los valores asociados a las keys
            foreach ($equipos as $key => $val) {

                if ($key == $valor) {

                    echo "El " . $valor . " tiene " . $val . " puntos, ahora mismo es el " . $aux . "º en la clasificación.";
                }

                $aux = $aux + 1;
            }
        }
        ?>

    </body>
</html>


