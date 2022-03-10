<?php

if (empty($_GET['route'])) {
  $route = "home";
} else {
  $route = $_GET['route'];
}

// url ocekavame ve tvaru controller/action
$routeArray = explode("/", $route);

$controller = $routeArray[0];
$action = empty($routeArray[1]) ? 'default' : $routeArray[1];

$controllerName = "\App\Controllers\\" . ucfirst($controller) . 'Controller';

if(!class_exists($controllerName)) {
  throw new Exception("Controller " . $controllerName . " not exist.");
}

require 'config/config.php';
$container = new App\Container($config);


$oController = new $controllerName($container);

$actionName = strtolower($action) . "Action";

if (!method_exists($oController, $actionName)) {
  throw new Exception("Action " . $actionName . " is not defined on controller " . $oController::CLASS);
}

$oController->startup($action, $controller);
$oController->{$actionName}();

