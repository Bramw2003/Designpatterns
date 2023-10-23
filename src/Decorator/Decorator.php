<?php

namespace DesignPatterns\Structural\Decorator;

interface Component {
    public function operation();
}

class ConcreteComponent implements Component {
    public function operation() {
        echo "ConcreteComponent operation.\n";
    }
}

class Decorator implements Component {
    private $component;

    public function __construct(Component $component) {
        $this->component = $component;
    }

    public function operation() {
        $this->component->operation();
    }
}

class ConcreteDecoratorA extends Decorator {
    public function operation() {
        parent::operation();
        echo "ConcreteDecoratorA operation.\n";
    }
}

class ConcreteDecoratorB extends Decorator {
    public function operation() {
        parent::operation();
        echo "ConcreteDecoratorB operation.\n";
    }
}

$component = new ConcreteComponent();
$decoratorA = new ConcreteDecoratorA($component);
$decoratorB = new ConcreteDecoratorB($decoratorA);
$decoratorB->operation();
