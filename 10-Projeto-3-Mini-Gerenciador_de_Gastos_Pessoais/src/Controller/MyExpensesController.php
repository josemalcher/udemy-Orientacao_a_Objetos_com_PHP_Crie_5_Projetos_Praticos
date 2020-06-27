<?php


namespace Code\Controller;


use Code\DB\Connection;
use Code\Entity\Expense;
use Code\View\View;

class MyExpensesController
{
    public function index()
    {
        var_dump((new Expense(Connection::getInstace()))->findAll());
    }

    public function new()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST') {
            //var_dump($_POST);die;

            $post = $_POST;

            $expense = new Expense(Connection::getInstace());
            $expense->insert($post);

            return header('Location' . HOME . '/myexpenses');

        }

        $view = new View('expenses/new.phtml');
        return $view->render();
    }
}