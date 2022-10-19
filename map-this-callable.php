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
    foreach ($array as $key => $value) {
        $result[$key] = $callback($value);
    }
    return $result;
}


function zip(array $array, array ...$arrays)
{
    $result = [];
    for ($i = 0; $i < count($array); $i++) {
        $content = [$array[$i]];
        foreach ($arrays as $array) {
            $content[] = $array[$i];
        }
        $result[] = $content;
    }
    return $result;
}