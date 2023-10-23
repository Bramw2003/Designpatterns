<?php

namespace DesignPatterns\Behavioral\Iterator;

class MyIterator implements Iterator {
    private $items = [];
    private $position = 0;

    public function __construct($items) {
        $this->items = $items;
        $this->position = 0;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function current(): mixed {
        return $this->items[$this->position];
    }

    public function key(): mixed {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function valid(): bool {
        return isset($this->items[$this->position]);
    }
}

$items = array(1, 2, 3, 4, 5);
$it = new MyIterator($items);

foreach ($it as $key => $value) {
    echo "$key: $value\n";
}
