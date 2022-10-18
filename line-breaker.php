<?php
function breakLines(string $string, int $lenght): string {
    $lines = "";
    $words = explode(" ", $string);
    $currentLine = "";
    for ($i = 0; $i < count($words); $i++) {
        if (strlen($currentLine) + strlen($words[$i]) <= $lenght) {
            $currentLine .= $words[$i] . " ";
        } else {
            $lines .= $currentLine . PHP_EOL;
            $currentLine = $words[$i] . " ";
        }
    }
    $lines .= $currentLine;
    return $lines;
}
