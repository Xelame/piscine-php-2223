<?php
function myArrayReduce(array $array, callable $callable, $initial = null) {
    $accumulator = $initial;
    foreach ($array as $key => $value) {
        $accumulator = $callable($accumulator, $value, $key);
    }
    return $accumulator;
}