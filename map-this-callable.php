<?php
function myArrayMap(callable $callback, array $array, array ...$arrays) {
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = $callback($value);
    }
    return $result;
}