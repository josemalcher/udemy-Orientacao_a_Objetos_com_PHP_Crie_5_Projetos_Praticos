<?php

namespace Code\Controller;

use Code\View\View;
use Code\Entity\Product;

class ProductController
{
    public function index($id)
    {
        $id = (int)$id;

        $pdo = new \PDO('mysql:dbname=formacao_php;host=localhost', 'root', '');
        //var_dump((new Product($pdo))->find($id)); die;

        $view = new View('site/single.phtml');
        $view->product = (new Product($pdo))->find($id);

        return $view->render();


    }



}