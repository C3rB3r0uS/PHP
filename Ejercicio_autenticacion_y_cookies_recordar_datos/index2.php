<?php

if (!$_POST) {

        include 'formulario.php';
  
} else {

    if ($_POST['user'] == 'Pedro' && $_POST['passwd'] == 'Pedro') {

        if (isset($_POST['recordar'])) {

            setCookie('user', $_POST['user']);

        }

        include 'pagina_2.php';
    } else {

        include 'formulario.php';
        echo "Usuario o contraseña inválidos";
    }
}



