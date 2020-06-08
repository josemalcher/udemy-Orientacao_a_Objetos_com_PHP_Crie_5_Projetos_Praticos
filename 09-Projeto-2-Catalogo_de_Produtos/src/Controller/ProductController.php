<?php

namespace Code\Controller;


use Code\Entity\Product;

class ProductController
{
    public function index($id)
    {
        //print $id;
        $pdo = new \PDO('mysql:dbname=formacao_php;host=localhost', 'root', '');
        var_dump((new Product($pdo))->find($id)); die;
        //$view = new View('site/index.phtml');
        //$view->nome = "José Malcher Jr";

        //$view->products = ( new Product($pdo))->findAll();
        //return $view->render();
    }



}