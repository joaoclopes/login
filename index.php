<?php
require_once 'userController.php';


/*$getAction = $_GET["action"];
$getMethod = $_GET["method"];

$action = $getAction;
$method = $getMethod;

$newRegister = new $action;

$newRegister->action = $action;
$newRegister->method = $method;
$newRegister->cadastrar();*/

if(array_key_exists('action', $_REQUEST) && array_key_exists('method', $_REQUEST)) {
    $class = $_REQUEST['action'];
    $method = $_REQUEST['method'];

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