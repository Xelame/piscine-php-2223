<?php

function getFloor(int $currentfloor, int|null $floorRequest, array $buttonList) : int|null {
    
    if ($currentfloor === $floorRequest) {
        return $floorRequest;
    }
    
    if ($buttonList != [] && !in_array($currentfloor, $buttonList)) {
        $distance = 0;
        foreach ($buttonList as $button) {
            if ($distance < abs($currentfloor - $button)) {
                $distance = abs($currentfloor - $button);
                $currentfloor = $button;
            }
        }
        return $currentfloor;
    }

    if ($floorRequest === null) {
        return null;
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