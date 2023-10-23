<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class AnimalFactory {
    abstract public function createAnimal(): Animal;
}