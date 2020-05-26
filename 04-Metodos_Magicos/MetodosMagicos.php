<?php


class Produto
{
/*    public function __set($name, $value)
    {
        var_dump($name, $value);
    }*/
    public $props = [];
    public function __set($name, $value)
    {
        $this->props[$name] = $value;
    }

    public function __get($name)
    {
        return $this->props[$name];
    }


}

$produto = new Produto();
$produto->name = "Prouto teste 1";
$produto->price = 12.99;
/*
string(4) "name"
string(14) "Prouto teste 1"
string(5) "price"
float(12.99)
*/

// var_dump($produto->props);

/*
 array(2) {
  ["name"]=>
  string(14) "Prouto teste 1"
  ["price"]=>
  float(12.99)
}
*/

var_dump($produto->price);



