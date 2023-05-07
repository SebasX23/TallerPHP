<?php

class CuentaBancaria {
    private $titular;
    private $saldo = 0;
    private $tipoDeCuenta;
    
    public function __construct($titular, $saldo, $tipoDeCuenta){
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->tipoDeCuenta = $tipoDeCuenta;        
    }

    public function depositar($deposito){
        $this->saldo += $deposito;
        echo "Nuevo Saldo: $this->saldo$ <br>";
    }

    public function retirar($deposito){
        $this->saldo -= $deposito;
        echo "Nuevo Saldo: $this->saldo$ <br>";
    }
}

$cuenta = new CuentaBancaria("Juliana Ávila", 2000000 ,"Ahorros");

$cuenta->depositar(300000);
$cuenta->retirar(200000);