<link rel="stylesheet" href="../public/css/header.css">
<link rel="stylesheet" href="../public/css/root&font.css">
<header>
    <nav>
        <a href="../index.php"><img src="https://img.icons8.com/ios-filled/50/000000/hashtag-2.png"/><h1>Puissance 4</h1></a>
        <ul>
            <hr>
            <a href="../view/connect4-pvsp.php"><li>Jouer</li></a>
            <hr>
            <?php if (Security::isConnect()){?>
            <a href="../view/profil.php"><li>Profil</li></a>
            <hr>
            <a href="../view/disconnect.php"><li>Deconnexion</li></a>
            <hr>
            <?php }
            else{ ?>
            <a href="../view/connection.php"><li>Connexion</li></a>
            <hr>
            <a href="../view/register.php"><li>Inscription</li></a>
            <hr>
            <?php }?>
        </ul>
    </nav>
</header>