<?php

class Empleado {
    private $nombre;
    private $salario;
    private $departamento;

    public function __construct($nombre, $salario, $departamento){
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->departamento = $departamento;        
    }

    public function aumentarSalario($aumento){
        $salario = $this->salario + ($this->salario*$aumento / 100);
        echo "Nuevo Salario: $salario$";
    }
}

$dummy = new Empleado("DumDum", 1000000 , "Logistics");

$dummy->aumentarSalario(20);