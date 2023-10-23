<?php

namespace DesignPatterns\Structural\Flyweight;

interface Flyweight {
    public function operation();
}

class ConcreteFlyweight implements Flyweight {
    private $intrinsicState;

    public function __construct($intrinsicState) {
        $this->intrinsicState = $intrinsicState;
    }

    public function operation() {
        echo "ConcreteFlyweight: {$this->intrinsicState}\n";
    }
}

class UnsharedConcreteFlyweight implements Flyweight {
    private $allState;

    public function __construct($allState) {
        $this->allState = $allState;
    }

    public function operation() {
        echo "UnsharedConcreteFlyweight: {$this->allState}\n";
    }
}

class FlyweightFactory {
    /** @var Flyweight[] $flyweights */
    private $flyweights = [];

    public function getFlyweight($key): Flyweight {
        if (!isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new ConcreteFlyweight($key);
        }

        return $this->flyweights[$key];
    }
}

$factory = new FlyweightFactory();

$flyweight1 = $factory->getFlyweight("key1");
$flyweight1->operation();

$flyweight2 = $factory->getFlyweight("key2");
$flyweight2->operation();

$unsharedFlyweight = new UnsharedConcreteFlyweight("all state");
$unsharedFlyweight->operation();
