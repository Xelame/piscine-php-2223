<?php

function findIn(string $key, array $array) : bool|string {
    $result = false; 
    foreach ($array as $value) {
        if (gettype($value) === 'array') {
            $result = findIn($key, $value);
        }
        if ($value === $key) {
            return $value;
        }
    }
    return $result;
}