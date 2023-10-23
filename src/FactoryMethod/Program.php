<?php

namespace DesignPatterns\Creational\FactoryMethod;

$dogFactory = new DogFactory();
$dog = $dogFactory->createAnimal();
$dog->makeSound(); // Output: Woof!

$catFactory = new CatFactory();
$cat = $catFactory->createAnimal();
$cat->makeSound(); // Output: Meow!
