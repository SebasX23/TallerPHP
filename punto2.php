<?php

$radio;
$altura;

function volumenCilindro($radio, $altura){
    $volumen = pi() * $radio* $radio * $altura;
    echo $volumen;
}

volumenCilindro(4, 8);