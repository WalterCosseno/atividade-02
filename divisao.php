<?php
function imprimirDiv($num) {
    if ($num > 0 && is_int($num)) {
        echo "divisores de $num: ";
        
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                echo "$i ";
            }
        }
    } else {
        echo "escreva um número inteiro e positivo.";
    }
}
function lerNum() {
    $num = readline("escreva um número inteiro e positivo: ");
    
    if (is_numeric($num) && $num > 0 && floor($num) == $num) {
        return (int)$num;
    } else {
        echo "escreva um número inteiro e positivo válido.\n";
        return lerNum(); 
    }
}
$num = lerNum();
imprimirDiv($num);
?>
