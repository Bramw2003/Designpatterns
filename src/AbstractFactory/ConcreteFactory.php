<?php

namespace DesignPatterns\Creational\AbstractFactory;

class ConcreteFactory1 extends AbstractFactory {
    public function createProductA(): ProductA {
        return new ProductA1();
    }

    public function createProductB(): ProductB {
        return new ProductB1();
    }
}

class ConcreteFactory2 extends AbstractFactory {
    public function createProductA(): ProductA {
        return new ProductA2();
    }

    public function createProductB(): ProductB {
        return new ProductB2();
    }
}
