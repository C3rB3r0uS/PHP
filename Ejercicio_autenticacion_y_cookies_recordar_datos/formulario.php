<html>
    <head>
        <title>Recordar</title>
    </head>
    <body>
        
        <h1>Recordar</h1>
        
        <form action="<?PHP $_SERVER["PHP_SELF"] ?>" method="POST">
        
            Usuario: <input type="text" name="user" value="" />
            <br>
            Contraseña: <input type="password" name="passwd" value="" />
            <br/>
            <input type="checkbox" name="" value="ON" />Deseo recordar los datos
            <br/>
            <input type="submit" value="Intro" name="intro"/>
        
        </form>

       
        
    </body>
</html>

