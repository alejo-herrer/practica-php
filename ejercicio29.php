<?php

    $pokemones = array("Pikachu"=>array("tipo1"=>"electrico","tipo2"=>"","altura"=>0.4,"numero"=>0025),"Bulbasaur"=>array("tipo1"=>"planta","tipo2"=>"veneno","altura"=>0.4,"numero"=>0001));

    echo json_encode($pokemones);

?>