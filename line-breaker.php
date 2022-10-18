<?php
function breakLines(string $string, int $lenght): string {
    $lines = [];
    $words = explode(" ", $string);
    $currentLine = "";
    foreach ($words as $word) {
        if (strlen($currentLine) + strlen($word) > $lenght) {
            $lines[] = $currentLine;
            $currentLine = "";
        }
        $currentLine .= $word . " ";
    }
    $lines[] = $currentLine;
    return implode("\n", $lines);
}
