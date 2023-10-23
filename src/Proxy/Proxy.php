<?php

namespace DesignPatterns\Structural\Proxy;

interface Subject {
    public function request();
}

class RealSubject implements Subject {
    public function request() {
        echo "RealSubject: Handling request.\n";
    }
}

class Proxy implements Subject {
    private $real_subject;

    public function __construct(RealSubject $real_subject) {
        $this->real_subject = $real_subject;
    }

    public function request() {
        if ($this->check_access()) {
            $this->real_subject->request();
            $this->log_access();
        }
    }

    public function check_access() {
        echo "Proxy: Checking access prior to firing a real request.\n";
        return true;
    }

    public function log_access() {
        echo "Proxy: Logging the time of request.\n";
    }
}

$real_subject = new RealSubject();
$proxy = new Proxy($real_subject);
$proxy->request();
