<?php

$today = function () : string {
    return "It is " . date('F j, Y');
};

$isLeapYear = function (int $year) : bool {
    return $year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0);
};