<?php

function manageMovements(string $instruction) : array {
    $movements = [];
    $previousMove = '';
    foreach (str_split($instruction) as $move) {
        if ($move == 'R') {
            $movements[] = 'RIGHT' . $previousMove != $move ? '' : ' AGAIN';
        } elseif ($move == 'L') {
            $movements[] = 'LEFT' . $previousMove != $move ? '' : ' AGAIN';
        } elseif ($move == 'F') {
            $movements[] = 'FRONT' . $previousMove != $move ? '' : ' AGAIN';
        } elseif ($move == 'B') {
            $movements[] = 'BACKWARDS' . $previousMove != $move ? '' : ' AGAIN';
        }
        $previousMove = $move;
    }
    return $movements;
}