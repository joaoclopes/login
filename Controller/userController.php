<?php

require_once 'userService.php';

class UserController {

    public function cadastrar() {
        require_once 'users.php';
        $u = new User;
        $user = addslashes($_POST['user']);
        $password = addslashes($_POST['password']);
        $name = addslashes($_POST['name']);
        if(validateUser($user, $password, $name)){
            $u->connect("logindobanco","localhost","root","123");
            if($u->msgError == ""){
                if($u->register($name,$user,(md5($password)))){
                    echo "cadastrado com sucesso";
                } else {
                    echo "Ja cadastrado";
                }
            } else {
                echo "Erro: ".$u->msgError;
                return false;
            }
        }
    }
}