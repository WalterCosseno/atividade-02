<?php
function calcularMedia($nums) {
    $soma = 0;
    $quantidade = 0;
    foreach ($nums as $num) {
        if ($num < 0) {
            break; 
        }
        if ($num > 0) {
            $soma += $num;
            $quantidade++;
        }
    }
    if ($quantidade > 0) {
        return $soma / $quantidade;
    } else {
        return 0; 
    }
}
function lerSeqNum() {
    $nums = [];
    echo "escolha uma sequência de números, quando quiser terminar a sequência, digite um número negativo:\n";
    
    while (true) {
        $num = (int) readline(); 

        if ($num < 0) {
            break; 
        }

        $nums[] = $num; 
    }
    return $nums;
}

$nums = lerSeqNum();
$media = calcularMedia($nums);

echo "média dos valores positivos: " . $media . "\n";

