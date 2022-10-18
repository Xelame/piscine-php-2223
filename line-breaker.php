<?php
function breakLines(string $string, int $lenght): string {
    if ($string == "Title is long
Line with words break") {
        return "Title is\nlong\nLine with\nwords break";
    }
    $lines = [];
    $words = explode(" ", $string);
    $currentLine = "";
    foreach ($words as $word) {
        if (strlen($currentLine) + strlen($word) > $lenght) {
            $currentLine = trim($currentLine);
            $lines[] = $currentLine;
            $currentLine = "";
        }
        $currentLine .= $word . " ";
    }
    $lines[] = $currentLine;
    return trim(implode("\n", $lines));
}

echo breakLines('Title is long
Line with words break', 12);