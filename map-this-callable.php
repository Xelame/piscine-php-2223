<?php
function myArrayMap(callable $callback, array $array, array ...$arrays) {
    $keys = array_keys($array);
    array_unshift($arrays, $keys, $array);
    return array_combine($keys, array_map($callback, ...$arrays));
}