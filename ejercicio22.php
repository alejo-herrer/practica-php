<?php

    //DATOS DE CONEXIÓN
    $servidor='localhost'; //127.0.0.1
    $usuario='root';
    $contraseña='';
    
    //CAPTURA DE ERRORES
    try{

        $conexion= new PDO("mysql:host=$servidor;dbname=pruebadb",$usuario,$contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo 'Conexión establecida';

    }catch(PDOException $error){

        echo 'Conexión fallida'.$error;

    }
?>