<?php
function reverse(array $liste): array {
    $reversed = [];
    for ($i = count($liste) - 1; $i >= 0; $i--) {
        $reversed[] = $liste[$i];
    }
    return $reversed;
}

function push(array $liste, string... $elements): int {
    foreach ($elements as $e) {
        $liste[] = $e;
    }
    return count($liste);
}

function sum(array $liste): int {
    $sum = 0;
    foreach ($liste as $e) {
        $sum += $e;
    }
    return $sum;
}

function arrayContains(array $liste, int|string|float $searched): mixed {
    foreach ($liste as $e) {
        if ($e === $searched) {
            return $searched;
        }
    }
    return "Nothing";
}