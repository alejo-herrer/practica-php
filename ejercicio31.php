<?php

    $archivo="ejercicio31.txt";

    $archivoAbierto = fopen($archivo,'r');

    $contenido= fread($archivoAbierto,filesize($archivo));

    echo $contenido;

?>