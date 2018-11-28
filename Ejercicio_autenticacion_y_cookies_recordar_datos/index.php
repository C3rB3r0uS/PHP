<?php

if (!$_POST) {

    if (isset($_COOKIE['user']) && isset($_COOKIE['password'])) {

        include 'pagina_2.php';
        echo "Usuario registrado: " . $_COOKIE['user'];
    } else {

        include 'formulario.php';
    }
} else {

    if ($_POST['user'] == 'Pedro' && $_POST['passwd'] == 'Pedro') {

        if (isset($_POST['recordar'])) {

            setCookie('user', $_POST['user']);
            setCookie('password', $_POST['passwd']);
        }

        include 'pagina_2.php';
    } else {

        include 'formulario.php';
        echo "Usuario o contraseña inválidos";
    }
}


