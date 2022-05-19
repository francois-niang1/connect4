<link rel="stylesheet" href="../public/css/footer.css">
<link rel="stylesheet" href="../public/css/root&font.css">
<footer>
    <section class="part-one">
        <img src="https://img.icons8.com/ios-filled/50/000000/hashtag-2.png"/>
        <p>Copyright © 2021 - 2022 - Tous droits réservés.</p>
    </section>
    <section class="part-two">
        <article class="social">
            <ul>
                <a href="https://github.com/francois-niang1/oclock"><img src="https://img.icons8.com/ios-filled/50/000000/github.png"/></a>
                <a href="https://francois-niang.students-laplateforme.io/"><img src="https://img.icons8.com/ios-filled/50/000000/user-male-circle.png"/></a>
                <a href="https://www.linkedin.com/in/fran%C3%A7ois-niang/"><img src="https://img.icons8.com/ios-filled/50/000000/linkedin-circled--v1.png"/></a>
            </ul>
        </article>
        <hr>
        <article class="pages">
            <ul>
                <a href="../index.php"><li>Accueil</li></a>
                <a href="../view/connect4-pvsp.php"><li>Jouer</li></a>
                <a href="../view/classement.php"><li>Classement</li></a>
                <?php if (Security::isConnect()){?>
                <a href="../view/profil.php"><li>Profil</li></a>
                <a href="../view/disconnect.php"><li>Deconnexion</li></a>
                <?php }
                else{ ?>
                <a href="../view/connection.php"><li>Connexion</li></a>
                <a href="../view/register.php"><li>Inscription</li></a>
                <?php }?>
            </ul>
        </article>
    </section>
</footer>