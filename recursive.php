<?php
function factorial(int $number) : int|float {
    if ($number === 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}