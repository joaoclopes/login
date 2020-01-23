<?php
require_once 'users.php';
$u = new User
?>



<?php
if(isset($_POST['user'])) {
    $user = addslashes($_POST['user']);
    $password = addslashes($_POST['password']);
    $name = addslashes($_POST['name']);
    if(!empty($user) && !empty($password) && !empty($name)){
        $u->connect("logindobanco","localhost","root","");
            if($u->msgError == ""){
                if($u->register($name,$user,(md5($password)))){
                    echo "cadastrado com sucesso";
                } else {
                   echo "Ja cadastrado";
                }
            } else {
                echo "Erro: ".$u->msgError;
            }
    } else {
        echo "Preenche ai seu otario";
    }
}


?>