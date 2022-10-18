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


function findIn(string $search, array $array) : bool|string {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            return findIn($search, $value);
        } else {
            if ($key === $search) {
                return $value;
            }
        }
    }
    return false;
}

echo findIn("name", $tab);