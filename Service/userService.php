<?php

class UserService {
    public function validateUser($user, $password, $name){
        if(!empty($user) && !empty($password) && !empty($name)){
            if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@]{8,12}$/', $password)) {
                return true;
            }
        } else {
            return false;
        }
    }
}