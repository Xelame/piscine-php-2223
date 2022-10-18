<?php
function calc(string $string) : int {
    return eval("return $string;");
}