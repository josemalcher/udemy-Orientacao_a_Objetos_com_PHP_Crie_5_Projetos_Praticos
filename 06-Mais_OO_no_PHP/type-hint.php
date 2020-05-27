<?php
declare(strict_types=1);

class Product
{
    private $name;
    private $price;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}

class Cart
{
    private $itens = [];

    public function addProduct(Product $product) // Declaração
    {
        $this->itens[] = $product;
    }

    public function getItens(): array // declaração tipo return
    {
        return $this->itens;
    }
}

$produtuo1 = new Product();
$produtuo1->setName("Produto 1");
$produtuo1->setPrice(20.99);

$produtuo2 = new Product();
$produtuo2->setName("Produto 2");
$produtuo2->setPrice(100.99);

$cart = new Cart();
$cart->addProduct($produtuo1);
$cart->addProduct($produtuo2);

var_dump($cart->getItens());
/*
 array(2) {
  [0]=>
  object(Product)#1 (2) {
    ["name":"Product":private]=>
    string(9) "Produto 1"
    ["price":"Product":private]=>
    float(20.99)
  }
  [1]=>
  object(Product)#2 (2) {
    ["name":"Product":private]=>
    string(9) "Produto 2"
    ["price":"Product":private]=>
    float(100.99)
  }
}

 */

print "PRoduto " . $produtuo1->getName() . "Preço R$ " . $produtuo1->getPrice();
// PRoduto Produto 1Preço R$ 20.99