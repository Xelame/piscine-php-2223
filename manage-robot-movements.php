<?php

function manageMovements(string $instruction) : array {
    $movements = [];
    $previousMove = '';
    for ($i = 0; $i < strlen($instruction); $i++) {
        $move = $instruction[$i];
        if ($move === 'R') {
            $move = 'RIGHT';
        } elseif ($move === 'L') {
            $move = 'LEFT';
        } elseif ($move === 'F') {
            $move = 'FRONT';
        } elseif ($move === 'B') {
            $move = 'BACKWARDS';
        }
        if ($move === $previousMove) {
            $move .= ' AGAIN';
        }
        $movements[] = $move;
        $previousMove = $move;
    }
    return $movements;
}

echo join(manageMovements('RLB'));