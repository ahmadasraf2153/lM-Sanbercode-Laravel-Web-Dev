<?php

require_once "Animal.php";

class Frog {
    public $legs;
    public $cold_blooded;
    public $name;

    public function __construct($name, $cold_blooded, $legs) {
        $this->name = $name;
        $this->cold_blooded = $cold_blooded;
        $this->legs = $legs;
    }

    public function jump() {
        echo "hop hop";

    }
}

?>