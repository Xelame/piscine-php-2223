<?php
function f() {
    return array(static fn () => a + b, static fn () => a - b, static fn () => a * b); 
};