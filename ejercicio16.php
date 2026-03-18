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

    //LEER UN ARRAY CON VALORES NUMERICOS
    echo '<br><br>'.$frutas[0];
    echo '<br>'.$frutas[1];
    echo '<br>'.$frutas[2].'<br>';

    //SE PUEDE RECORRER CON UN FOR
    echo '<h2>RECORRIDO CON FOR </h2>';
    for($i=0;$i<3;$i++){
        echo $frutas[$i].'<br>';
    }

?>