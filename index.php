<?php
require_once 'userController.php';


$getAction = $_GET["action"];
$getMethod = $_GET["method"];

$action = $getAction;
$method = $getMethod;

$newRegister = new UserController;