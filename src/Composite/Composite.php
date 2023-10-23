<?php

namespace DesignPatterns\Structural\Composite;

interface Component {
    public function operation();
}

class Leaf implements Component {
    public function operation() {
        echo "Leaf operation.\n";
    }
}

class Composite implements Component {
    /** @var Component[] $children */
    private $children = array();

    public function add(Component $component) {
        array_push($this->children, $component);
    }

    public function remove(Component $component) {
        $index = array_search($component, $this->children);
        if ($index !== false) {
            unset($this->children[$index]);
        }
    }

    public function operation() {
        foreach ($this->children as $child) {
            $child->operation();
        }
    }
}

$leaf = new Leaf();
$composite = new Composite();
$composite->add($leaf);
$composite2 = new Composite();
$composite2->add($composite);
$composite2->operation();
