<?php

namespace DesignPatterns\Behavioral\Command;

interface Command {
    public function execute();
}

class Light {
    public function turnOn() {
        echo "The light is on.\n";
    }

    public function turnOff() {
        echo "The light is off.\n";
    }
}

class LightOnCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOn();
    }
}

class LightOffCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOff();
    }
}

class RemoteControl {
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function pressButton() {
        $this->command->execute();
    }
}

$remoteControl = new RemoteControl();
$light = new Light();

$turnOnCommand = new LightOnCommand($light);
$turnOffCommand = new LightOffCommand($light);

$remoteControl->setCommand($turnOnCommand);
$remoteControl->pressButton();

$remoteControl->setCommand($turnOffCommand);
$remoteControl->pressButton();
