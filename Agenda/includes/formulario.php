<html>
    <head>
        <title>title</title>
    </head>
    <body>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
            
            Nombre: <input type="text" name="nombre" value="" />
            <br/>
            Email: <input type="email" name="email" value="" />
            <br/>
            Tlf: <input type="phone" name="tlf" value="" />
            <br/>
            Direccion: <textarea name="direccion" id="direccion" cols="30" rows="10"></textarea>
            <br/>
            <input type="submit" value="Enviar" />
        </form>
        
    </body>
</html>


