<?php

    $nombreArchivo = 'ejercicio32.txt';
    $contenido = 'Hola soy yo de nuevo';

    $achivoCrear = fopen($nombreArchivo,"w");

    fwrite($achivoCrear,$contenido);
    fclose($achivoCrear);


?>