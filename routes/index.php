<?php
require_once './Service/userController.php';


/*$getAction = $_GET["action"];
$getMethod = $_GET["method"];

$action = $getAction;
$method = $getMethod;

$newRegister = new $action;

$newRegister->action = $action;
$newRegister->method = $method;
$newRegister->cadastrar();*/

if(array_key_exists('action', $_GET) && array_key_exists('method', $_GET)) {
    $class = $_GET['action'];
    $method = $_GET['method'];

        if(!class_exists($class)) {
            echo 'Não tem class';
        }else if(!method_exists(new $class, $method)) {
            echo 'Não tem method';
            
        } else {
            $controller = new $class;
            $controller->$method();
        }
} else {
    echo 'Não tem valores';
}