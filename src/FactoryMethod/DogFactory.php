<?php

namespace DesignPatterns\Creational\FactoryMethod;

class DogFactory extends AnimalFactory {
    public function createAnimal(): Animal {
        return new Dog();
    }
}