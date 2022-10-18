<?php

function capsMe(string $string) : string {
    return strtoupper($string);
}

function lowerMe(string $string) : string {
    return strtolower($string);
}

function upperCaseFirst(string $string) : string {
    return capsMe(substr($string, 0, 1)) . substr($string, 1);
}

function lowerCaseFirst(string $string) : string {
    return lcfirst($string);
}

function removeBlankSpace(string $string) : string {
    return str_replace(' ', '', $string);
}