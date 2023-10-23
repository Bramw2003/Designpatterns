<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Cat implements Animal {
    public function makeSound() {
        echo "Meow! \n";
    }
}