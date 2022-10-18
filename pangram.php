<?php
function isPangram(string $string): bool {
    $string = strtolower($string);
    $alphabet = range('a', 'z');
    foreach ($alphabet as $letter) {
        if (strpos($string, $letter) === false) {
            return false;
        }
    }
    return true;
}