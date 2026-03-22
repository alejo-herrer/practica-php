<?php

    $url="https://pokeapi.co/api/v2/pokemon";

    $opciones= array('ssl'=>array('verigy_peer'=>false,'verify_peer_name'=>false));

    $respuesta=file_get_contents($url,false,stream_context_create($opciones));

    $objRespuesta = json_decode($respuesta);

    foreach($objRespuesta->results as $lista){
        echo $lista->name.'<br>';
        echo $lista->url.'<br>'.'<br>';
    }

?>