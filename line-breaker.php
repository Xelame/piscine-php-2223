<?php
function breakLines(string $string, int $lenght): string {
    $lines = "";
    $words = explode(" ", $string);
    $currentLine = "";
    foreach ($words as $word) {
        if (strlen($currentLine) + strlen($word) + 1 <= $lenght) {
            $currentLine .= $word . " ";
        } else {
            $lines .= $currentLine . "\n";
            $currentLine = $word . " ";
        }
    }
    $lines .= $currentLine;
    return $lines;
}
