<?php

class Estudiante {
    private $nombre;
    private $edad;
    private $calificacion;

    public function __construct($nombre, $edad, $calificacion){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->calificacion = $calificacion;        
    }

    public function actualizarCalificacion($calificacion){
        $this->calificacion = $calificacion;
        echo "Nota Actualizada: $this->calificacion";
    }
}

$stud1 = new Estudiante("Diego", "20", 4.0);

$stud1->actualizarCalificacion(5.0);