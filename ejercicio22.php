<?php

    //DATOS DE CONEXIÓN
    $servidor='localhost'; //127.0.0.1
    $usuario='root';
    $contraseña='';
    
    //CAPTURA DE ERRORES
    try{

        $conexion= new PDO("mysql:host=$servidor;dbname=pruebadb",$usuario,$contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo 'Conexión establecida, se agrego el registro de la foto';

        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Foto 1', 'foto.jpg');";

        $conexion->exec($sql);



    }catch(PDOException $error){

        echo 'Conexión fallida'.$error;

    }
?>