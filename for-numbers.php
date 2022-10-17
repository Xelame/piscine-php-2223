<?php
for ($number = 2; $number <= 100; $number++) {
    $numberOfDiv = 0;
    for ($div = 1; $div <= round(sqrt($number)); $div++) {
        if ($number % $div == 0) {
            $numberOfDiv++;
        }   
    }
    if ($numberOfDiv == 1) {
        echo $number != 97 ? "$number, " : "$number";
    }
}