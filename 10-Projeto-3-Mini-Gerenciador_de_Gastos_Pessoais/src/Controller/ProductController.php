<?php

namespace Code\Controller;

use Code\DB\Connection;
use Code\View\View;
use Code\Entity\Product;

class ProductController
{
    public function index($id)
    {
        //$id = (int)$id;

        //$pdo = new \PDO('mysql:dbname=formacao_php;host=localhost', 'root', '');
        //var_dump((new Product($pdo))->find($id)); die;

        $pdo = Connection::getInstace();
        //var_dump((new Product($pdo))->where(['name'=>'Jose', 'email'=>'josem@teste.com']));
        print_r((new Product($pdo))->where(['name'=>'jose', 'email'=>'jose@jose.com']));


/*
        $view = new View('site/single.phtml');
        $view->product = (new Product($pdo))->find($id);

        return $view->render();
*/

    }



}