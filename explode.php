<?php

function explodeWords(string $string, string $delimiter = ' ', int $limit = PHP_INT_MAX) : array {
    $result = [];
    $word = '';
    $oldLimit = $limit;
    if ($limit <= 0) {
        $limit = PHP_INT_MAX;
    }
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
    if ($oldLimit < 0) {
        $result = array_slice($result, 0, $oldLimit);
    }
    return $result;
}

echo implode(' ', explodeWords('La-fonction/explode/est/trop-bien', '/', 2));
echo implode(' ', explodeWords('La-fonction/explode/est/trop-bien', '/', -1));