<?php


class Person
{
    public $name;
    //protected $age = 30;
    private $age = 30;

    public function showName ()
    {
        return $this->name;
    }

    public function age()
    {
        return $this->age();
    }
}

class Woman extends Person
{
    public function showWomanAge()
    {
        //return $this->age;
        return $this->age();
    }
}

$person = new Woman();
$person->name = "Luci";
//$person->age = 20;
print $person->showName() . " " . $person->showWomanAge();