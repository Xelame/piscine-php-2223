<?php
$f = function () {
    return array(static fn () => a + b, static fn () => a - b, static fn () => a * b); 
};