<?php

namespace DesignPatterns\Behavioral\Observer;

interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

interface Observer {
    public function update(Subject $subject);
}

class ConcreteSubject implements Subject {
    private $observers = array();

    public function attach(Observer $observer) {
        array_push($this->observers, $observer);
    }

    public function detach(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

class ConcreteObserver implements Observer {
    public function update(Subject $subject) {
        echo "ConcreteObserver has been notified.\n";
    }
}

$subject = new ConcreteSubject();
$observer = new ConcreteObserver();

$subject->attach($observer);
$subject->notify();
