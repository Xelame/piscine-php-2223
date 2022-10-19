<?php
function myArrayMap(?callable $callback, array $array, array ...$arrays)
{
    if ($callback === null) {
        if (count($arrays) <= 0) {
            return $array;
        } else {
            return zip($array, ...$arrays);
        }
    }
    $result = [];
    for ($i = 0; $i < count($array); $i++) {
        $temp = [];
        foreach ($arrays as $array) {
            $temp[] = $array[$i];
        }
        $result = $callback($array[$i], ...$temp);
    }
    return $result;
}

// Zip arrays without using array_map
function zip(array $array, array ...$arrays)
{
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = [$value];
        foreach ($arrays as $array) {
            $result[$key][] = $array[$key];
        }
    }
    return $result;
}
