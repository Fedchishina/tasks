<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once(ROOT.DS.'lib'.DS.'init.php');
$router = new Router($_SERVER['REQUEST_URI']);
/*echo "<pre>";
print_r('route: '. $router->getRoute().PHP_EOL);
print_r('language: '. $router->getLanguage().PHP_EOL);
print_r('controller: '. $router->getController().PHP_EOL);
print_r('action: '. $router->getMethodPrefix().$router->getAction().PHP_EOL);
echo "Params:";
print_r($router->getParams());*/