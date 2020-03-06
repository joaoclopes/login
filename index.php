<?php
require_once 'userController.php';


$getAction = $_GET["action"];
$getMethod = $_GET["method"];

$action = $getAction;
$method = $getMethod;

$newRegister = new $action;

$newRegister->action = $action;
$newRegister->method = $method;
$newRegister->cadastrar();