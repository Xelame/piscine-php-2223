<?php

function explodeWords(string $string, string $delimiter = ' ', int $limit = PHP_INT_MAX) : array {
    $result = [];
    $word = '';
    $i = 0;
    if ($limit >= 0) {
        while ($i < strlen($string) && count($result) < $limit - 1) {
            if ($string[$i] === $delimiter) {
                $result[] = $word;
                $word = '';
            } else {
                $word .= $string[$i];
            }
            $i++;
        }
        $result[] = substr($string, $i);
    } else {
        while ($i < strlen($string)) {
            if ($string[$i] === $delimiter) {
                $result[] = $word;
                $word = '';
            } else {
                $word .= $string[$i];
            }
            $i++;
        }
    }
    return $result;
}

echo implode(' ', explodeWords('La-fonction/explode/est/trop-bien', '/', 2));
echo implode(' ', explodeWords('La-fonction/explode/est/trop-bien', '/', -1));