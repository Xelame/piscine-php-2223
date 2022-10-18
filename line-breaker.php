<?php
function breakLines(string $string, int $lenght): string{
    $newString = "";
    $words = explode(" ", $string);
    $currentLenght = 0;
    foreach ($words as $word) {
        if ($currentLenght + strlen($word) + 1 <= $lenght) {
            $currentLenght += strlen($word) + 1;
            $newString .= $word . " ";
        } else {
            $currentLenght = 0;
            $newString .= $word . "\n";
        }
    }
    return $newString;
}
