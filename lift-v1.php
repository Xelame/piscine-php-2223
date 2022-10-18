<?php

function getFloor(int $currentfloor, int|null $floorRequest, array $buttonList) : int|null {
    if ($floorRequest === null) {
        return null;
    }
    if ($currentfloor === $floorRequest) {
        return $floorRequest;
    }

    if ($buttonList != []) {
        $distance = 0;
        foreach ($buttonList as $key => $value) {
            if ($distance > abs($currentfloor - $value)) {
                $distance = abs($currentfloor - $value);
            }
        }
        return $distance;
    }
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