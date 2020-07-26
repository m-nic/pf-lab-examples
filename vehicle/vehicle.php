<?php

function output($message)
{
    echo $message . "\n";
}

function vSpace($n)
{
    for ($i = 0; $i < $n; $i++) {
        echo "\n";
    }
}

class Vehicle
{
    public $maxSpeed;
    public $wheels;

    protected $speed = 0;

    public function __construct($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function accelerate()
    {
        if ($this->speed <= $this->maxSpeed) {
            $this->speed++;
        }
    }

    public function decelerate()
    {
        if ($this->speed > 0) {
            $this->speed--;
        }
    }

    public function isStopped()
    {
        return $this->speed === 0;
    }

    public function isMoving()
    {
        return !$this->isStopped();
    }

    public function makeNoise()
    {
        output('BEEEP');
    }
}


$vehicle = new Vehicle(1);

if ($vehicle->isStopped()) {
    output("vehicul oprit");
}

$vehicle->accelerate();

if ($vehicle->isMoving()) {
    output("vehicul in miscare");
}

$vehicle->makeNoise();

output("Viteza maxima:" . $vehicle->maxSpeed);

vSpace(3);


class Bicycle extends Vehicle
{
    public $wheels = 2;

    public function makeNoise()
    {
        output("HOONK HOONK");
    }
}

$bike = new Bicycle(5);

if ($bike->isStopped()) {
    output("bicicleta oprita");
}

$bike->accelerate();

if ($bike->isMoving()) {
    output("bicicleta in miscare");
}

$bike->makeNoise();
output("Viteza maxima:" . $bike->maxSpeed);

vSpace(3);

class Car extends Vehicle
{
    public $wheels = 4;

    public function accelerate()
    {
        if ($this->speed <= $this->maxSpeed) {
            $this->speed += 10;
        }
    }

    public function decelerate()
    {
        if ($this->speed > 0) {
            $this->speed -= 10;
        }
    }

    public function makeNoise()
    {
        output("TEEET TEEET");
    }
}


$car = new Car(150);

if ($car->isStopped()) {
    output("masina oprita");
}

$car->accelerate();

if ($car->isMoving()) {
    output("masina in miscare");
}

$car->makeNoise();
output("Viteza maxima:" . $car->maxSpeed);