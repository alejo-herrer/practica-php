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

        //ESCRIBIMOS LA SENTENCIA SQL PARA LEER DATOS
        $sql = "SELECT * FROM `fotos`";

        //PREPARAMOS LA SENTENCIA Y LA EJECUTAMOS
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        //GUARDAMOS LOS DATOS EN UNA VARIABLE CON FECTHALL
        $resultado = $sentencia->fetchAll();

        //IMPRIMIMOS EN PANTALLA CON UN FOREACH
        foreach($resultado as $foto){

            foreach($foto as $fotoi){
                echo $fotoi.'<br>';
            }

            echo '<br>';
        }

        $conexion->exec($sql);



    }catch(PDOException $error){

        echo 'Conexión fallida'.$error;

    }
?>