<?php

function explodeWords(string $string, string $delimiter = ' ', int $limit = PHP_INT_MAX) : array {
    $result = [];
    $word = '';
    $i = 0;
    while ($i < strlen($string)) {
        if ($string[$i] === $delimiter && count($result) < $limit - 1) {
            $result[] = $word;
            $word = '';
        } else {
            $word .= $string[$i];
        }
        $i++;
    }
    $result[] = $word;
    return $result;
}