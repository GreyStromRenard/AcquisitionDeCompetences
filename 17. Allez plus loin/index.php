<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=UTF8','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// J'ai testé toutes les lignes MySQL sur phpMyAdmin

$query = 'SELECT *, DATE_FORMAT(c.created_at, "%d/%m/%Y") FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1';

$query = 'SELECT *, DATE_FORMAT(c.created_at, "%d/%c/%Y") AS comment_date FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1';

$query = 'SELECT AVG(c.review) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1';

$query = 'SELECT ROUND(AVG(c.review),1) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1';
$averageRatingStatement = $db->prepare($query);
$averageRatingStatement->execute();
$averageRating = $averageRatingStatement->fetch();

$query = 'SELECT AVG(review) AS rating, recipe_id FROM comments GROUP BY recipe_id HAVING rating >= 3';

$query = 'SELECT AVG(review) AS rating, recipe_id FROM comments WHERE user_id = 1 GROUP BY recipe_id HAVING rating >= 2';
