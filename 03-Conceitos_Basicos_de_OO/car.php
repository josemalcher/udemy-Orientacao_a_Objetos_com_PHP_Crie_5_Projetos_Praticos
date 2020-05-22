<?php


class car
{
    public $color;
    public $years;
    public $model;

    /**
     * car constructor.
     * @param $color
     * @param $years
     * @param $model
     */
    public function __construct($color, $years, $model)
    {
        $this->color = $color;
        $this->years = $years;
        $this->model = $model;
    }


    public function run()
    {
        return $this->model . " Car is Running";
    }

    public function stop()
    {
        return $this->model . " Car is Stop";
    }

    public function __destruct()
    {
        print "\n REMOVENDO Objeto" . __CLASS__ ;
    }


}

$car = new Car("Red", "2000", "HONDA");
//$car->model = "Car";
//$car->color = "red";
//$car->years = 2000;

$car2 = new Car("BLUE0", "2020", "RENAULT");
//$car2->model = "Car 2";
//$car2->color = "blue";
//$car2->years = 2020;

print $car->run();
print "\n";
print $car->stop();

print "\n";

print $car2->run();
print "\n";
print $car2->stop();
/*
HONDA Car is Running
HONDA Car is Stop
RENAULT Car is Running
RENAULT Car is Stop
 REMOVENDO Objetocar
 REMOVENDO Objetocar
*/
