<?php
// suivant l'existence de certaines variables get page
if (isset($_GET["page"])) {

    switch ($_GET["page"]) {
        case "rubriques":
            // ici nos requêtes SQL
            $request = $db->query('SELECT *
FROM section
');
            // nombre de résultats
            $numreq = $request->rowCount();

            // si le nombre de résultats est plus grand que 0
            if ($numreq > 0) {
                $allUser = $request->fetchAll(PDO::FETCH_ASSOC);
                // transformation de la requête en format
                // lisible par PHP en utilisant fetchAll
                // Pour PHP, choisissez tableau associatif
                $request->closeCursor();
            } else {
                // création d'un message contenant la chaine "Pas encore de message"
                $error = 'Pas encore de message';
            }

            // fermeture de la requête
            // appel de la vue des rubriques
            include "../view/rubriques.view.php";
            break;
        case "users":
            $request = $db->query('SELECT username, fullname
FROM user
ORDER BY username ASC;
');
            $numreq = $request->rowCount();

            if ($numreq > 0) {
                $allUser = $request->fetchAll(PDO::FETCH_ASSOC);
                $request->closeCursor();
            } else {
                $error = 'Pas encore de message';
            }

            include "../view/users.view.php";
            break;
        case "articles":
            // ici nos requêtes SQL
            $request = $db->query('SELECT *
FROM article
ORDER BY article_date_create DESC
LIMIT 30;
');
            // nombre de résultats
            $numreq = $request->rowCount();

            // si le nombre de résultats est plus grand que 0
            if ($numreq > 0) {
                $allUser = $request->fetchAll(PDO::FETCH_ASSOC);
                // transformation de la requête en format
                // lisible par PHP en utilisant fetchAll
                // Pour PHP, choisissez tableau associatif
                $request->closeCursor();
            } else {
                // création d'un message contenant la chaine "Pas encore de message"
                $error = 'Pas encore de message';
            }

            // fermeture de la requête
            // appel de la vue des rubriques
            include "../view/articles.view.php";
            break;
        ### a faire
        default:
            // appel de la vue d'une erreur
            include "../view/error404.view.php";
            break;
    }
} else {
//     $request = $db->query('SELECT `text` 
// FROM article
// ORDER BY RAND()
// LIMIT 1;
// ');
//     // nombre de résultats
//     $numreq = $request->rowCount();

//     // si le nombre de résultats est plus grand que 0
//     if ($numreq > 0) {
//         $allUser = $request->fetchAll(PDO::FETCH_ASSOC);
//         // transformation de la requête en format
//         // lisible par PHP en utilisant fetchAll
//         // Pour PHP, choisissez tableau associatif
//         $request->closeCursor();
//     } else {
//         // création d'un message contenant la chaine "Pas encore de message"
//         $error = 'Pas encore d\'article disponible';
//     }
    // à chaque affichage de la page d'accueil
    // Nous allons insérer un article au hasard
    // on va créer un titre d'article aléatoire de 25 caractères
    $caracteres = '0123456789 abcdefghijkl mnopqrstuv wxyzABCDEFGHI JKLMNOPQR STUVWXYZ';
    $nbCaracteres = strlen($caracteres); // nombres de caractères
    $title = '';
    for ($i = 0; $i < 25; $i++) {
        $title .= $caracteres[rand(0, $nbCaracteres - 1)];
    }
    $text = '';
    for ($i = 0; $i < 500; $i++) {
        $text .= $caracteres[rand(0, $nbCaracteres - 1)];
    }
    $titleSlug = uniqid("titre-", true);
    // on ajoute un article à la date du jour avec des valeurs au hasard et l'auteur 211
    $insertArticle = $db->exec("INSERT INTO `article`  (`title`, `title_slug`, `text`, `user_id`,`article_date_create`,`article_date_posted`,`published`) VALUES ('$title', '$titleSlug','$text', 211, NOW(), NOW(),1)");
    // on récupère l'id de la dernière ligne insérée et on le met en integer
    $lastId = (int) $db->lastInsertId();
    // appel de la vue de l'accueil
    include "../view/accueil.view.php";
}
