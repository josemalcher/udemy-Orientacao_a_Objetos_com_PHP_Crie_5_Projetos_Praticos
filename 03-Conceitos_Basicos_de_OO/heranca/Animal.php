<?php

class Animal
{
    public $name;

    public function sleep()
    {
        return $this->name . " are sleeping... \n";
    }
}

class Dog extends Animal
{
    public function sleep()
    {
        print parent::sleep();
        return "Dog SLEEEEEEEEPING \n";
    }
}


class Bird extends Animal
{

}

$dog1 = new Dog();
$dog1->name = "TED";
print $dog1->sleep();

$bird = new Bird();
$bird->name = "Balack Bird";
print $bird->sleep();