<?php

function checkCircuits(int $circuit) : array {
    $debugger = [];
    if ($circuit%2 == 0) {
        $debugger[] = "Left arm";
    } 
    if ($circuit%3 == 0) {
        $debugger[] = "Right arm";
    } 
    if ($circuit%5 == 0) {
        $debugger[] = "Motherboard";
    } 
    if ($circuit%7 == 0) {
        $debugger[] = "Processor";
    } 
    if ($circuit%11 == 0) {
        $debugger[] = "Zip Defluxer";
    } 
    if ($circuit%13 == 0) {
        $debugger[] = "Moter";
    }
    return $debugger;
}