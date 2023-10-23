<?php

interface Target {
    public function request();
}

class Adaptee {
    public function specificRequest() {
        echo "Adaptee specific request.\n";
    }
}

class Adapter implements Target {
    private $adaptee;

    public function __construct(Adaptee $adaptee) {
        $this->adaptee = $adaptee;
    }

    public function request() {
        $this->adaptee->specificRequest();
    }
}

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
$adapter->request();
