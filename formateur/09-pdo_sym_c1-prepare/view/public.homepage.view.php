<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<body>
<nav>
    <?php
    foreach($menu as $item):
    ?>
    <a href="?section=<?=$item['section_slug']?>">    <?=$item['section_title']?> </a> |
    <?php
    endforeach;
    ?>
</nav>
<h1>Hello world</h1>

<?php
var_dump($menu);
var_dump($pdo);
?>
</body>
</html>
