<?php
function myArrayMap(callable|null $callback, array $array, array... $arrays) : array {
    if ($callback === null) {
        return $array;
    }
    $result = [];
    $arrays[] = $array;
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        $args = [];
        foreach ($arrays as $array) {
            $args[] = $array[$i];
        }
        $result[] = $callback(...$args);
    }
    return $result;
}