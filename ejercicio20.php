<?php

    include 'ejercicio19.php';

    /*class persona{

        public $nombre; //PROPIEDADES
        private $edad;
        protected $altura;

        public function asignarnombre($nuevoNombre){  //MÉTODOS

            $this->nombre=$nuevoNombre;

        }

        public function imprimirnombre(){  //MÉTODOS

            echo 'Hola soy '.$this->nombre;
        }

        public function asignaredad($nuevaEdad){  //MÉTODOS

            $this->edad=$nuevaEdad;

        }

        public function imprimiredad(){  //MÉTODOS

            echo 'Tengo '.$this->edad.' años';
        }


    }

    */

    class trabajador extends persona{
        public $puesto;
        public function presentarse(){
            echo 'Hola soy '.$this->nombre.' y soy un '.$this->puesto;
        }
    }

    $objTrabajador = new trabajador('');  //INSTANCIA O CREACIÓN 
    $objTrabajador->asignarNombre('Alejandro');
    $objTrabajador->puesto='Profesor';

    echo $objTrabajador->nombre.'<br>'; //IMPRIMIR PROPIEDAD
    echo $objTrabajador->puesto;


    

?>