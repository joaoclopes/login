<?php

class UserController {

    public function cadastrar() {
        require_once 'users.php';
        $u = new User;
        $user = addslashes($_POST['user']);
        $password = addslashes($_POST['password']);
        $name = addslashes($_POST['name']);
        if(!empty($user) && !empty($password) && !empty($name)){
            if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@]{8,12}$/', $password)) {
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
            } else {
                echo "Preenche certo ai seu otario";
                return false;
            }
        }
    }
}