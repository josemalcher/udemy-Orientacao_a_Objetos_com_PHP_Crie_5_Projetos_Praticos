<?php


class Product
{
    private $name;
    private $price;
    private $description;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
}

$produto_1 = new Product();
$produto_1->setName("Vassoura");
$produto_1->setPrice(10);
$produto_1->setDescription("Vassoura TIpo 1");
print $produto_1->getName() . " Preço de R$ " . $produto_1->getPrice() ;
