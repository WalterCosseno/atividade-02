<?php

function validarPositivo($num) {
    return is_numeric($num) && $num > 0 && intval($num) == $num;
}

function imprimirTabuada($num) {
    echo "Tabuada de $num:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "\n";
    }
}

$num = readline("escolha um número inteiro e positivo: ");

if (validarPositivo($num)) {
    imprimirTabuada($num);
} else {
    echo "escreva um número inteiro positivo válido.\n";
}

?>
