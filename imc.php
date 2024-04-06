<?php

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

function interpretarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Peso normal";
    } elseif ($imc >= 24.9 && $imc < 29.9) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

$peso = readline("insira seu peso em kg: "); 
$altura = readline("insira sua altura em metros: ");  

$imc = calcularIMC($peso, $altura);

$resultadoIMC = interpretarIMC($imc);

echo "seu peso: " . $peso . " kg \n"; 
echo "sua altura: " . $altura . " metros \n";
echo "seu IMC: " . number_format($imc, 2) . "\n";
echo "seu resultado: " . $resultadoIMC;
