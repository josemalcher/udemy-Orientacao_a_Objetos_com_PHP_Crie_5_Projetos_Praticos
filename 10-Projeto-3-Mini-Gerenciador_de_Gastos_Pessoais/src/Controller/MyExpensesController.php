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
        var_dump((new Expense(Connection::getInstace()))->findAll());
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
}