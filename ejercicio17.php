<?php


    //ARRAY ASOCIATIVO

    echo '<h1>EJERCICIO DE ARRAY ASOCIATIVO</h1>';

    $frutas=array( 'f'=>'fresa','m'=>'manzana','p'=>'pera');

    print_r($frutas);

    //LEER UN ARRAY CON SU VALOR ASOCIADO
    echo '<br>'.$frutas['f'];
    echo '<br>'.$frutas['m'];
    echo '<br>'.$frutas['p'].'<br>';

    //SE PUEDE RECORRER CON UN FOREACH
    echo '<h2>RECORRIDO CON FOREACH </h2>';
    foreach($frutas as $i=>$fruta){
        echo 'Si tengo la letra '.$i.' significa '. $fruta.'<br>';
    }


?>