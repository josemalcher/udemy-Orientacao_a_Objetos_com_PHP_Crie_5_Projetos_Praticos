<?php

namespace Code\Controller;

use Code\View\View;
use Code\Entity\Product;

class HomeController
{
    public function index()
    {
        $pdo = new \PDO('mysql:dbname=formacao_php;host=localhost', 'root', '');


//        var_dump($products->findAll());
//        die();

        $view = new View('site/index.phtml');
        //$view->nome = "José Malcher Jr";

        $view->products = ( new Product($pdo))->findAll();
        return $view->render();
    }
}