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
        $temp = [];
        echo $value . PHP_EOL;
        foreach ($arrays as $array) {
            $temp[] = $array[$key];
        }
        $result[] = $callback($value, ...$temp);
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

print_r(myArrayMap(static fn ($n) => $n['value'], ['value1' => 1, 'value2' => 2, 'value3' => 3]));