<?php
function myArrayMap(callable|null $callback, array ...$arrays) {
    if ($callback === null) {
        return $arrays;
    }
    $result = [];
    $arrays = array_values($arrays);
    $count = count($arrays[0]);
    for ($i = 0; $i < $count; $i++) {
        $args = [];
        foreach ($arrays as $array) {
            $args[] = $array[$i];
        }
        $result[] = $callback(...$args);
    }
    return $result;
}