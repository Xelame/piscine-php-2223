<?php

function checkCircuits(int $circuit) : array {
    $debugger = [];
    if ($circuit%2 == 0) {
        $debugger[] = "Left arm";
    } elseif ($circuit%3 == 0) {
        $debugger[] = "Right arm";
    } elseif ($circuit%5 == 0) {
        $debugger[] = "Motherboard";
    } elseif ($circuit%7 == 0) {
        $debugger[] = "Processor";
    } elseif ($circuit%11 == 0) {
        $debugger[] = "Zip Defluxer";
    } elseif ($circuit%13 == 0) {
        $debugger[] = "Moter";
    }
    return $debugger;
}