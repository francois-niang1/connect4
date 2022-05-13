<?php 
require_once(__DIR__ . '/../controller/User.php');
require_once(__DIR__ . '/../controller/Toolbox.php');
require_once(__DIR__ . '/../controller/Security.php');

session_start();

if(isset($_POST['connection'])){
    if(!empty($_POST['loginC']) && !empty($_POST['passwordC'])){
        $user = new User();
        $user->connection($_POST['loginC'], $_POST['passwordC']);
    }
    else{
        Toolbox::addMessageAlert("Remplir tous les champs.", Toolbox::RED_COLOR);
    }
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
                <legend>Connectez-vous</legend>
                <label for ="loginC">Login :</label>
                <input id="loginC" type="text" name="loginC" placeholder="Login" />

                <label for ="passwordC">  Mot de passe :</label>
                <input id="passwordC" type="password" name="passwordC" placeholder="Mot de passe" />
            </fieldset>
            <button type="submit" name="connection">Connexion</button>
        </form>
    </main>
    <?php require_once('footer.php'); ?>
</body>
</html>