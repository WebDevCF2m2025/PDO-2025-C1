<?php
# VIEW
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sym |Accueil</title>
</head>
<body>
<<<<<<< HEAD
<nav>
    <?php
    foreach($menu as $item):
    ?>
    <a href="?section=<?=$item['section_slug']?>"><?=$item['section_title']?></a> |
    <?php
    endforeach;
    ?>
</nav>
<h1>Hello world</h1>
=======
<?php
// appel du menu
include 'inc/public.menu.inc.view.php';
?>
<h1>Sym | Accueil</h1>
<h2>Bienvenue sur notre site</h2>
<h3>Nos 10 derniers articles</h3>
>>>>>>> 4d2cc680217a97731a94d4dc2194e84acfd650be

<?php
//var_dump($pdo);
//var_dump($menu);

?>
</body>
</html>
