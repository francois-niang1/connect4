<?php 
require_once(__DIR__ . '/../controller/User.php');
require_once(__DIR__ . '/../controller/Toolbox.php');
require_once(__DIR__ . '/../controller/Security.php');

session_start();

if(isset($_POST['register'])){
    if(!empty($_POST['loginR']) && !empty($_POST['passwordR']) && !empty($_POST['conf-password'])){
        if($_POST['passwordR'] == $_POST['conf-password']){
            $user = new User();
            $user->register($_POST['loginR'], $_POST['passwordR']);
        }
        else{
            Toolbox::addMessageAlert("Mots de passe non identiques", Toolbox::RED_COLOR);
        }
    }
    else{
        Toolbox::addMessageAlert("Remplir tous les champs.", Toolbox::RED_COLOR);
    }
}

if(Security::isConnect()){
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once('header.php'); ?>
    <main>
        <form action="" method="post">
            <fieldset>
                <legend>Creer un compte</legend>
                <label for ="loginR">Login :</label>
                <input id="loginR" type="text" name="loginR" placeholder="Login" />

                <label for ="passwordR">  Mot de passe :</label>
                <input id="passwordR" type="password" name="passwordR" placeholder="Mot de passe" />

                <label for ="conf-password">Confirmez le mot de passe :</label>
                <input id="conf-password" type="password" name="conf-password" placeholder="Confirmez le mot de passe" />
            </fieldset>
            <button type="submit" name="register">Creer un compte</button>
        </form>
    </main>
    <?php require_once('footer.php'); ?>
</body>
</html>