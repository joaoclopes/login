<?php
require_once 'users.php';
$u = new User
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
<div id=corpo-cad>
    <h1>Cadastro</h1>
    <form method="POST">
    <input type="text" name="name" placeholder="Nome" maxlength="30">
    <input type="text" name="user" placeholder="User" maxlength="15">
    <input type="password" name="password" placeholder="Senha" maxlength="32">
    <input type="submit" value="Enviar">
    <a href="index.php"> <strong>Voltar</strong> </a>
    </form>
</div>

<?php
if(isset($_POST['user'])) {
    $user = addslashes($_POST['user']);
    $password = addslashes($_POST['password']);
    $name = addslashes($_POST['name']);
    if(!empty($name) && !empty($password) && !empty($name)){
        $u->connect("database_login","localhost","root","");
            if($u->msgError == ""){
                if($u->register($name,$user,(md5($password)))){
                    ?>
                    <div id="msgSuccess">

                    cadastrado com sucesso
                    
                    </div>
<?php  
                } else {
                    ?>
                    <div class="msgError">

                    Ja cadastrado

                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="msgError">

                <?php echo "Erro: ".$u->msgError; ?>

                </div>
                <?php
            }
    } else {
        echo "Preenche ai seu otario";
    }
}


?>

</body>
</html>