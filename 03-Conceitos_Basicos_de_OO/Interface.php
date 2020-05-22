<?php

interface Animal
{
    public function sound();
    public function run();
}

class Dog implements Animal
{
    public function sound()
    {
        return "Au au AU";
    }

    public function run()
    {
        return "DOG IS RUNNNN";
    }
}

$dog1 = new Dog();
print $dog1->run();
print "\n";
print $dog1->sound();
print "\n";
print $dog1 instanceof Animal;
print "\n";
print $dog1 instanceof Dog;
/*
DOG IS RUNNNN
Au au AU
1
1
*/

