<?php
require __DIR__ . '/../08-Projeto-1-Site_Institucional/vendor/autoload.php';

use Code\Controller\PageController;

$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0] : 'page';
$action = isset($url[1]) && $url[1] ? $url[1] : 'index';

$controller = "\Code\Controller\\".ucfirst($controller) . 'Controller';

$response = call_user_func([new $controller, $action], []);
print $response;