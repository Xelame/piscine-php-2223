<?php

$tab = [
    "name" => "forIn",
    "type" => "function",
    "arguments" => [
        "firstParam" => [
            "paramType" => "string",
            "description" => "the value key to find"
        ],
        "secondParam" => "array"
    ],
    "return" => "string or bool"
];


function findIn(string $key, array $array) : bool|string {
    $result = false; 
    foreach ($array as $value) {
        if (gettype($value) === 'array') {
            findIn($key, $value);
        }
        if ($value === $key) {
            return $value;
        }
    }
    return $result;
}