<?php
function getTenLastArticles(PDO $connectDB): array|string
{
  // var_dump($pdo);
  try {
    $request = $connectDB->query("
SELECT id, title, title_slug, text
FROM article LIMIT 10");
    // pas de résultat, on envoie l'erreur
    if ($request->rowCount() === 0) return "Pas encore de section";
    // sinon (non visible, car return ligne précédente)
    return $request->fetchAll();
  } catch (Exception $e) {
    return $e->getMessage();
  }
}
