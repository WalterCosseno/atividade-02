<?php

$numeroAleatorio = rand(1, 100);

echo "advinhe o número que está entre 1 e 100.\n";

$acertou = false;

while (!$acertou) {
    $chute = readline("qual será o seu chute: ");

    if (!is_numeric($chute) || $chute < 1 || $chute > 100) {
        echo "escreva números somente entre 1 e 100.\n";
        continue;
    }

    if ($chute < $numeroAleatorio) {
        echo "O número é maior.\n";
    } elseif ($chute > $numeroAleatorio) {
        echo "O número é menor.\n";
    } else {
        echo "você acertou, o número é $numeroAleatorio.\n";
        $acertou = true;
    }
}

?>
