<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=UTF8','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Toutes les codes MySQL ont été testé sur phpMyAdmin

$query = 'SELECT u.full_name, c.comment
FROM users u
INNER JOIN comments c
ON u.user_id = c.user_id';

$query = 'SELECT u.full_name, c.comment
FROM users u
INNER JOIN comments c
ON u.user_id = c.user_id
WHERE u.recipe = "Cassoulet"
ORDER BY c.created_at DESC
LIMIT 10';

$query = 'SELECT u.full_name, c.comment
FROM users u
LEFT JOIN comments c
ON u.user_id = c.user_id';

$query = 'SELECT u.full_name, c.comment, r.title
FROM users u
JOIN comments c
	ON u.user_id = c.user_id
JOIN recipes r
	ON c.recipe_id = r.recipe_id';


