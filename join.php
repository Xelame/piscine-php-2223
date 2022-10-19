<?php

function joinWords(array $words, string $separator = ' ') : string {
    $result = '';
    foreach ($words as $word) {
        $result .= $word . $separator;
    }
    return substr($result, 0, -strlen($separator));
}