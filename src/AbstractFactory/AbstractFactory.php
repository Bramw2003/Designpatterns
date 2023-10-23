<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory {
    abstract public function createProductA(): ProductA;
    abstract public function createProductB(): ProductB;
}
