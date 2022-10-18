<?php

function getFloor(int $currentfloor, int|null $floorRequest, array $buttonList) : int|null {
    if ($floorRequest === null) {
        return null;
    }
    if ($currentfloor === $floorRequest) {
        return null;
    }
    if ($currentfloor < $floorRequest) {
        if (in_array($currentfloor, $buttonList)) {
            return $currentfloor;
        }
        return $floorRequest;
    }
    if ($currentfloor > $floorRequest) {
        if (in_array($currentfloor, $buttonList)) {
            return $currentfloor;
        }
        return $floorRequest;
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