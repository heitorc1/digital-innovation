<?php

function divisao(float $numerador, float $denominador)
{
    if ($numerador == 0 || $denominador == 0) {
        throw new Exception('A variável não pode ser igual a 0!');
    }

    return $numerador / $denominador;
}

$numerador = 10;
$denominador = 2.6;

try {
    $resultado = divisao($numerador, $denominador);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

echo $resultado;
