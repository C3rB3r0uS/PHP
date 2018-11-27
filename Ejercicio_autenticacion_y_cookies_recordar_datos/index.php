<?php

if(!$_POST){
    
    if($_COOKIE['user'] && $_COOKIE['passwd']){
        
        
        
    }
    
    include 'formulario.php';
    
}else{
    
    if($_POST['user'] == 'pedro' && $_POST['passwd'] == 'pedro'){
        
        include 'pagina_2.php';
        setCookie('user',$_POST['user']);
        setCookie('password',$_POST['passwd']);
        
    }else{
        
        include 'formulario.php';

    }

}

?>

