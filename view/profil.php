<?php session_start();
require_once(__DIR__ . '/../controller/User.php');
require_once(__DIR__ . '/../controller/Toolbox.php');
require_once(__DIR__ . '/../controller/Security.php');
require_once(__DIR__ . '/../model/Stats_model.php');

$stats = New Stats_model();
$myStats = $stats->info_stats_profil($_SESSION['user']['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/profil.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('header.php'); ?>
    <main>
        <h1>Bienvenue <?= $_SESSION['user']['login']?></h1>
        <h2>Voici votre tableau de score</h2>
        <table>
            <tr>
                <th>Parties jouées</th>
                <th>Parties gagnées</th>
            </tr>
            <?php foreach($myStats as $c){ ?>
            <tr>
                <td><?php echo $c['game_played'] ?></td>
                <td><?php echo $c['game_won'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </main>
    <?php require_once('footer.php'); ?>
</body>
</html>