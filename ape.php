<?php

require_once "Animal.php";

class Ape {
    public $legs;
    public $cold_blooded;
    public $name;

    public function __construct($name, $cold_blooded, $legs) {
        $this->name = $name;
        $this->cold_blooded = $cold_blooded;
        $this->legs = $legs;
    }

    public function yell() {
        echo "Auooo";
    }
}

?>