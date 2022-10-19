<?php

function explodeWords(string $string, string $delimiter = ' ', int $limit = PHP_INT_MAX) : array {
    $result = [];
    $word = '';
    $i = 0;
    while ($i < strlen($string) && count($result) < $limit) {
        if ($string[$i] === $delimiter) {
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