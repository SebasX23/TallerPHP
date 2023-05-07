<?php

function calcularIVA($precio, $iva = 10){
    echo "Precio final: ";
    echo $precio + ($precio*($iva/100));

}

calcularIVA(10000);