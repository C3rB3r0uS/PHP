<html>
    <head>
        <title>Web inserción en tablas</title>
    </head>
    <body>

        <h1>WEB DE INSERCIÓN EN TABLAS</h1>

        <form action = "<?= $_SERVER["PHP_SELF"] ?>" method="POST">


            <?php

//            $valor = 1; 

            function getValorMaxClientes() {

                $dwes = new mysqli('localhost', 'root', '', 'telefonia');
                $error = $dwes->connect_errno;

                if ($error == null) {

                    $valorMaxClientes = $dwes->query("SELECT MAX(CODIGO_CLIENTE)+1 from clientes");
                }
            }
            ?>

            <h3>Insertar cliente</h3>

            Código cliente: <input type="text" name="codcliente" value="" />
            <br>
            Nombre cliente: <input type="text" name="nomcliente" value="" />
            <br>
            DNI cliente: <input type="text" name="dnicliente" value="" />
            <br>
            <input type="submit" name="introCliente" value="INTRO" />

            <h3>Insertar tarjeta telefónica</h3>

            Número SIM: <input type="text" name="numsim" value="" />
            <br>
            Código de cliente asociado: <input type="text" name="codcliente" value="" />
            <br>
            <input type="submit" name="introTarjeta" value="INTRO" />

            <h3>Insertar llamada emitida</h3>

            Código de llamada: <input type="text" name="codllamada" value="" />
            <br>
            SIM llamante: <input type="text" name="simllamante" value="" />
            <br>
            Número llamado: <input type="text" name="numllamado" value="" />
            <br>
            Duración llamada: <input type="text" name="durllamada" value="" />
            <br>
            Importe llamada: <input type="text" name="costllamada" value="" />
            <br>
            <input type="submit" name="introLlamada" value="INTRO" />

        </form>

    </body>
</html>


