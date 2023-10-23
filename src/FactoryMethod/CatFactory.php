<?php

namespace DesignPatterns\Creational\FactoryMethod;

class CatFactory extends AnimalFactory {
    public function createAnimal(): Animal {
        return new Cat();
    }
}