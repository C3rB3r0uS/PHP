<html>
    <head>
        <title>Transaccion</title>
    </head>
    <body>

        <?php
        $dwes = new mysqli('localhost', 'root', '', 'dwes');
        $error = $dwes->connect_errno;

        if ($error == null) {

            $dwes->autocommit(false);

            $dwes->query("INSERT INTO stock VALUES ('3DSNG',3,1)");
            echo "Se ha realizado la query INSERT: " . "$dwes->affected_rows" . "<br>";

            $dwes->query("UPDATE stock SET unidades = 1 WHERE tienda = 1 && producto LIKE '%3DSNG%'");
            echo "Se ha realizado la query UPDATE: " . "$dwes->affected_rows" . "<br>";
            
            $dwes-> commit();
            
        }
        ?>

    </body>
</html>

