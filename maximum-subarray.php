<?php
function findMaximumSubarray (array $array): int | float {
    $max = 0;
    $current = 0;
    foreach ($array as $value) {
        $current += $value;
        if ($current < 0) {
            $current = 0;
        }
        if ($current > $max) {
            $max = $current;
        }
    }
    return $max;
}