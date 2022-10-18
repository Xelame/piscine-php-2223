<?php
function reverse(string $string): string {
    $reversed = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    return $reversed;
}

function isPalindrome(string $string): bool
{
    return $string === reverse($string);
}