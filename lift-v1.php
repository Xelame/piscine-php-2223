<?php

function getFloor(int $currentfloor, int|null $floorRequest, array $buttonList) : int|null {
    
    if ($currentfloor === $floorRequest) {
        return $floorRequest;
    }

    if ($buttonList != [] && !in_array($currentfloor, $buttonList)) {
        $negdistance = $currentfloor;
        $posdistance = $currentfloor;
        while (true) {
            $negdistance--;
            $posdistance++;
            if (in_array($negdistance, $buttonList)) {
                return $negdistance;
            }
            if (in_array($posdistance, $buttonList)) {
                return $posdistance;
            }
        }
    }

    if ($floorRequest === null) {
        return null;
    }

}

function getDirection(int $currentfloor, int|null $floorRequest, array $buttonList) : int {
    if ($floorRequest === null) {
        return 0;
    } else {
        if ($currentfloor < $floorRequest) {
            return 1;
        } else {
            return -1;
        }
    }
}

echo getFloor(3, null, [1, 7]);