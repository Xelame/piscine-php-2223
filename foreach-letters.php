<?php
foreach (range('A', 'Z') as $letter) {
    echo $letter != 'Z' ? $letter . " | " : $letter;
}