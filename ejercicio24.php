<?php

    session_start();

    $_SESSION['usuario'] = 'usuario';
    $_SESSION['status'] = 'logueado';

    echo 'Usuario: '.$_SESSION['usuario'].' || Status: '.$_SESSION['status'];

?>