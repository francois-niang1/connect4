<?php
require_once(__DIR__ . '/../controller/User.php');
require_once(__DIR__ . '/../controller/Toolbox.php');
require_once(__DIR__ . '/../controller/Security.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/connect4.css">
    <script type="text/javascript" src="../public/js/connect4-pvsp.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>Puissance 4</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <main>
        <article>
            <?php if(Security::isConnect()){?>
                <h3> <?= $_SESSION['user']['login']; ?>  Tu es en Rouge </h3>
            <h3>L'invité est en Jaune</h3>
            <?php } ?>
        </article>
        <h2 id="winner"></h2>
        <div id="board"></div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>
</html>