<?php

    //ARRAY
    $frutas = array('manzana','uva','pera');


    //SE PUEDE RECORRER CON UN FOREACH
    echo '<h2>RECORRIDO CON FOREACH </h2>';
    foreach($frutas as $fruta){
        echo $fruta.'<br>';
    }

    //SE PUEDE IMPPRIMIR CON UN PRINT_R
    echo '<h2>IMPRIMIR CON PRINT_R </h2>';
    print_r($frutas);
?>