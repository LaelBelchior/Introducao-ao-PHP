<?php

$peso = 88;
$altura = 1.87;
$expoente = 2;

$alturaFinal = pow($altura, $expoente);

$imc = round($peso / $alturaFinal);

if($imc < 25){
    echo "Seu IMC é $imc! Você está classificado como normal." . PHP_EOL;
} elseif ($imc >= 25 && $imc < 30) {
    echo "Seu IMC é $imc! Você está classificado como sobrepeso." . PHP_EOL;
} elseif ($imc >= 30 && $imc < 40){
    echo "Seu IMC é $imc! Você está classificado como obesidade." . PHP_EOL;
} else {
    echo "Seu IMC é $imc! Você está classificado como obesidade grave." . PHP_EOL;
}
