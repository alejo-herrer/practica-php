<?php

    //IMPLEMENTACIÓN DE UN METODO ESTATICO QUE SE AÑADE A UN OBJETO NO A SUS INSTANCIAS
    class UnaClase{
        
        public static function unMetodo(){
            echo 'Hola soy un método estático <br>';
        }
    }

    //SE PUEDE llAMAR A ESE MÉTODO DIRECTAMENTE DE LA CLASE
    UnaClase::unMetodo();

    //SE PUEDE LLAMAR AL MÉTODO INSTANCIANDO LA CLASE
    $newObj = new UnaClase();
    $newObj->unMetodo();

?>