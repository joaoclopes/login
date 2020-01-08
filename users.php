<?php

 Class User
 {
     private $pdo;
     public $msgError = "";

    public function connect($nome, $host, $usuario, $senha) {
        global $pdo;
        global $msgError;
        try {
        $pdo = new PDO("mysql: dbname=" .$nome. ";host" .$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgError = $e->getMessage();
        }
        
    }

    public function register($name, $user, $password) {
        global $pdo;

        $sql = $pdo->prepare("SELECT user_id FROM users WHERE user = :u").
        $sql->bindValue(":u",$user);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false;
        } else {
            $sql = $pdo->prepare("INSERT INTO users (user, name, password) VALUES (:u, :n, :p)");
            $sql->bindValue(":u",$user);
            $sql->bindValue(":n",$name);
            $sql->bindValue(":p",$password);
            $sql->execute();
            return true;
        }

    }

    public function login($user, $password) {
        $sql = $pdo->prepare("SELECT id_user from users WHERE user = :u AND password = :p");
        $sql->bindValue(":u",$user);
        $sql->bindValue(":p",$password);
        $sql->execute();
        if($sql->rowCount() > 0){
        $data = $sql->fetch();
        sessions_start();
        $_SESSION['id_user'] = $data['id_user'];
            return true;
        } else {
            return false;
        }

    }

 }
