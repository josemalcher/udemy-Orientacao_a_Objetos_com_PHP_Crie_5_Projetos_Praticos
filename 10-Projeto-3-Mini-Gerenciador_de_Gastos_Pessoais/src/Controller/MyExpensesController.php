<?php


namespace Code\Controller;


use Code\DB\Connection;
use Code\Entity\Category;
use Code\Entity\Expense;
use Code\Entity\User;
use Code\View\View;

class MyExpensesController
{
    public function index()
    {
        $view = new View('expenses/index.phtml');
        $view->expenses = (new Expense(Connection::getInstace()))->findAll();

        return $view->render();
    }

    public function new()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $connection = Connection::getInstace();

        if ($method == 'POST') {
            $data = $_POST;

            $expense = new Expense($connection);
            $expense->insert($data);

            return header('Location: ' . HOME . '/myexpenses');
        }

        $view = new View('expenses/new.phtml');

        $view->categories = (new Category($connection))->findAll();
        $view->users      = (new     User($connection))->findAll();

        return $view->render();
    }

    public function edit($id)
    {
        $view = new View('expenses/edit.phtml');
        $connection = Connection::getInstace();

        $view->categories = (new Category($connection))->findAll();
        $view->users      = (new     User($connection))->findAll();
        $view->expense    = (new Expense($connection)) ->find($id);

        return $view->render();
    }
}