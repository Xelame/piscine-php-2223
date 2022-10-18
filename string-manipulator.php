<?php

function capsMe(string $string) : string {
    return strtoupper($string);
}

function lowerMe(string $string) : string {
    return strtolower($string);
}

function upperCaseFirst(string $string) : string {
    $array = explode(" ", $string);
    foreach ($array as $key => $value) {
        $array[$key] = ucfirst($value);
    }
    return implode(" ", $array);
}

function lowerCaseFirst(string $string) : string {
    $array = explode(" ", $string);
    foreach ($array as $key => $value) {
        $array[$key] = lcfirst($value);
    }
    return implode(" ", $array);
}

function removeBlankSpace(string $string) : string {
    return str_replace(' ', '', $string);
}

echo upperCaseFirst('hello My Name is Quentin');