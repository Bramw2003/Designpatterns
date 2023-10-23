<?php

namespace DesignPatterns\Structural\Facade;

class Subsystem1 {
    public function operation1() {
        echo "Subsystem1 operation.\n";
    }
}

class Subsystem2 {
    public function operation2() {
        echo "Subsystem2 operation.\n";
    }
}

class Facade {
    private $subsystem1;
    private $subsystem2;

    public function __construct() {
        $this->subsystem1 = new Subsystem1();
        $this->subsystem2 = new Subsystem2();
    }

    public function operation() {
        $this->subsystem1->operation1();
        $this->subsystem2->operation2();
    }
}

$facade = new Facade();
$facade->operation();
