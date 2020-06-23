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
        //var_dump((new Product($pdo))->where(['id'=>12]));
        //var_dump((new Product($pdo))->find(10));

        /*var_dump((new Product($pdo))->insert(
            ['name'=>'produto 1 teste',
             'price'=> 19.99,
             'amount'=> 10,
             'description'=> 'Teste',
             'slug'=>'slug']
        ));*/

        //var_dump((new Product($pdo))->update(['id'=> 1, 'name'=> 'Teste update ok']));

        var_dump((new Product($pdo))->delete(12));


/*
        $view = new View('site/single.phtml');
        $view->product = (new Product($pdo))->find($id);

        return $view->render();
*/

    }



}