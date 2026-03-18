<?php

    class persona{

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

    $objAlumno = new persona('');  //INSTANCIA O CREACIÓN 
    $objAlumno->asignarNombre('Alejandro');
    $objAlumno->asignaredad(25);

    echo $objAlumno->nombre.'<br>'; //IMPRIMIR PROPIEDAD
    $objAlumno->imprimirnombre();
    $objAlumno->imprimiredad();
    

?>