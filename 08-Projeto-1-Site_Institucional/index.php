<?php
require __DIR__ . '/../08-Projeto-1-Site_Institucional/vendor/autoload.php';

$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0] : 'page';

print $controller;