<?php
require_once(__DIR__ . '/../controller/Stats.php');
require_once(__DIR__ . '/../controller/Toolbox.php');
require_once(__DIR__ . '/../controller/Security.php');

session_start();

$stats = New Stats();
$classement = $stats->classement();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/classement.css">
    <title>Classement</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <main>
        <table>
            <tr>
                <th>Login</th>
                <th>Parties gagnées</th>
            </tr>
            <?php foreach($classement as $c){
                if($c['played'] > 0){ ?>
            <tr>
                <td><?php echo $c['login'] ?></td>
                <td><?php echo $c['won'] ?></td>
            </tr>
            <?php }} ?>
        </table>
    </main>
    <?php require_once 'footer.php'; ?>
</body>
</html>