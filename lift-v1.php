<?php

function getFloor(int $currentfloor, int|null $floorRequest, array $buttonList) : int|null {
    return $floorRequest === null ? null : $currentfloor;
}

function getDirection(int $currentfloor, int|null $floorRequest, array $buttonList) : int {
    if ($floorRequest === null) {
        return 0;
    } else {
        if (in_array($floorRequest, $buttonList)) {
            if ($currentfloor < $floorRequest) {
                return 1;
            } else {
                return -1;
            }
        } else {
            return 0;
        }
    }
}