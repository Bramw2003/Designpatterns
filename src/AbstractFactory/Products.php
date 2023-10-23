<?php

namespace DesignPatterns\Creational\AbstractFactory;

class ProductA1 implements ProductA {
    public function __construct() {
        echo "Product A1 created.\n";
    }
}

class ProductA2 implements ProductA {
    public function __construct() {
        echo "Product A2 created.\n";
    }
}

class ProductB1 implements ProductB {
    public function __construct() {
        echo "Product B1 created.\n";
    }
}

class ProductB2 implements ProductB {
    public function __construct() {
        echo "Product B2 created.\n";
    }
}
