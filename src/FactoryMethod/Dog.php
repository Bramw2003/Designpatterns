<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Dog implements Animal {
    public function makeSound() {
        echo "Woof! \n";
    }
}