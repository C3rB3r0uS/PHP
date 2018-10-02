<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $v[1] = 90;
        $v[30] = 7;
        $v['e'] = 99;
        $v['hola'] = 43;

        foreach ($v as $value) {
            
            print $value . " ";
            
        }
        ?>
    </body>
</html>