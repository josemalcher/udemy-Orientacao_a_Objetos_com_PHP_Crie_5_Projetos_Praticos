<?php

namespace Code\Controller;
use Code\View\View;

class HomeController
{
    public function index()
    {
        $view = new View('site/index.phtml');
        $view->nome = "José Malcher Jr";

        return $view->render();
    }
}