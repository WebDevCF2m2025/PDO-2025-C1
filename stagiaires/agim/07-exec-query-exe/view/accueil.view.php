<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/style.css">
    <title>Accueil de notre site</title>
</head>

<body>
    <?php
    include "inc/menu.inc.view.php";
    ?>
    <div class="cont" style="display: flex; flex-direction: column; align-items: center;">
        <h1>Accueil de notre site</h1>
        <p style="font-size: 1.2rem;">Bienvenue sur notre site !</p>
        <p style="font-size: 1rem;">un nouvel article a été inséré: dont l'id est <?= $lastId ?></p>
        <img src="../public/img/database.jfif" alt="" width="30%">
    </div>
    <br>
    <h1>Article au hasard</h1>
    <div class="div" style="display: flex; flex-direction: column; align-items: center;">
        <p style="color: red; width: 80%; font-size: 1.3rem; text-align: center; border: 1px solid black; padding: 1%;">
        <?= $title ?><br><br>
        <?= $text ?>
        </p>
    </div>

</body>

</html>