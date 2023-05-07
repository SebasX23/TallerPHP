<?php

class Libro {
    private $titulo;
    private $autor;
    private $publica;

    public function __construct($titulo, $autor, $publica){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->publica = $publica;        
    }
    
    public function mostrarDetalles(){
        echo "Título: $this->titulo <br> Autor: $this->autor <br> Año de publicación: $this->publica";
    }
}

$Kafka = new Libro("La Metamorfosis","Franz Kafka","1915");

$Kafka->mostrarDetalles();