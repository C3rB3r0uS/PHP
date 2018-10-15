<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>

        <h1>Anagrama</h1>

        <?php if (!$_POST) { ?>

            <form action="<?= $_SERVER["PHP_SELF"] ?>" method = "post">

                Introduzca 2 palabras: 

                <br>

                Primera palabra: <input type="text" name="palabra1" value="" /><br>

                Segunda palabra: <input type="text" name="palabra2" value="" /> <br>

                <input type="submit" value="Comprobar" />


            </form>

            <?php
        } else {
            
            $palabra1 = $_POST["palabra1"];
            $palabra2 = $_POST["palabra2"];
            
            $arrayPalabra1 = str_split($palabra1);
            $arrayPalabra2 = str_split($palabra2);
            
            if(count($arrayPalabra1) != count ($arrayPalabra2)){
                
                echo "No son anagramas";
                
            }else{
                
                arsort($arrayPalabra1);
                arsort($arrayPalabra2);
                
                $contador = 0;
                $igual = true;
                
                while($contador < count($arrayPalabra1) || $igual == false){
                    
                    if($arrayPalabra1[$contador] != $arrayPalabra2[$contador]){
                        
                        $igual = false;
                        
                        echo "No son anagramas";
                        
                    }
                    
                    $contador++;
                    
                }
                
            }

        }
        ?>

    </body>
</html>


