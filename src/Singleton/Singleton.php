<?php

class Singleton {
    private static $instance = null;

    private function __construct() {
        // Private constructor to prevent instantiation from outside the class.
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}
