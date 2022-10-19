<?php
function myArrayMap(?callable $callback, array $array, array ...$arrays) {
    if ($callback === null) {
        $newArray = [];
        for ($i = 0; $i < count($array); $i++) {
            $content = [$array[$i]];
            foreach ($arrays as $array) {
                $content[] = $array[$i];
            }
            $newArray[] = $content;
        }
        return $newArray;
    }
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = $callback($value);
    }
    return $result;
}