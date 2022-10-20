<?php

class Magic {
    public $card = "As";

    public function __construct() {
        echo $this->card;
    }

    public function __destruct()
    {
        echo $this->card;
    }

    public function __get($card) {
        echo $this->card;
    }

    public function __set($card, $value) {
        echo $this->card;
    }

    public function __isset($card) {
        echo $this->card;
    }

    public function __toString()
    {
        echo $this->card;
    }
}