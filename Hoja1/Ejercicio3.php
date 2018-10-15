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
        
        $euro = 166.386;
        
        for($i = 50; $i <= 1000; $i = $i+50){
            
            $conversion = $i / $euro;
            print $i . " pesetas son " . $conversion . "<br>"; 
            
        }
  
        ?>
    </body>
</html>

