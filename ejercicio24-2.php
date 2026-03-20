<?php

    session_start();

    echo 'Usuario: '.$_SESSION['usuario'].' || Status: '.$_SESSION['status'];

?>