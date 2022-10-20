<?php
interface PoolTempsInterface {
    public function getActualTemp(): int;
    public function getLastDaysTemps(): array;
    public function setHeater(bool $bool): bool;
}

class PoolTemps implements PoolTempsInterface {
    private int $actualTemp;
    private array $lastDaysTemps;
    public bool $isActive = false;

    public function __construct(int $actualTemp, array $lastDaysTemps) {
        $this->actualTemp = $actualTemp;
        $this->lastDaysTemps = $lastDaysTemps;
    }

    public function getActualTemp(): int {
        return $this->actualTemp;
    }

    public function getLastDaysTemps(): array {
        return $this->lastDaysTemps;
    }

    public function setHeater(bool $bool): bool {
        $this->isActive = $bool;
        return $this->isActive;
    }

    public function activateHeater(): bool {
        if ($this->actualTemp >= 25 && array_reduce($this->lastDaysTemps, fn($a, $b) => $a + $b) / count($this->lastDaysTemps) > 20) {
            return true;
        }
    }
}