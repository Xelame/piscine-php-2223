<?php
function reverse(array $liste): array {
    $reversed = [];
    for ($i = count($liste) - 1; $i >= 0; $i--) {
        $reversed[] = $liste[$i];
    }
    return $reversed;
}

function push(array $tab, string... $elements): int { 
    foreach ($elements as $e) {
        $tab[] = $e;
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

function merge(array $liste1, array $liste2, array $liste3): array {
    $merged = [];
    foreach ($liste1 as $e) {
        $merged[] = $e;
    }
    foreach ($liste2 as $e) {
        $merged[] = $e;
    }
    foreach ($liste3 as $e) {
        $merged[] = $e;
    }
    return $merged;
}

$tab = [];

echo push($tab, "first", "second", "five");