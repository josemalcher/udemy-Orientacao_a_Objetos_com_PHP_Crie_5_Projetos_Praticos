<?php


class car
{
    public $color;
    public $years;
    public $model;

    public function run()
    {
        return $this->model . " Car is Running";
    }

    public function stop()
    {
        return $this->model . " Car is Stop";
    }
}

$car = new Car();
$car->model = "Car";
$car->color = "red";
$car->years = 2000;

$car2 = new Car();
$car2->model = "Car 2";
$car2->color = "blue";
$car2->years = 2020;

print $car->run();
print "\n";
print $car->stop();

print "\n";

print $car2->run();
print "\n";
print $car2->stop();