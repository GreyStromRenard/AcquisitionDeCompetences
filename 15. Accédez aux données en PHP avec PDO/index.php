<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=UTF8','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$query = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';
$insertRecipesStatement = $db->prepare($query);
$insertRecipesStatement->execute([
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : Des flageolets ! Etape 2 : Euh ...',
    'author' => 'contributeur@exemple.com',
    'is_enabled' => 1,
]);

$query = 'UPDATE recipes SET is_enabled = 0 WHERE author = "mickeal.andrieu@exemple.com"';
$updateRecipesStatement = $db->prepare($query);
$updateRecipesStatement->execute();

$id = 4; 

$query = 'DELETE FROM recipes WHERE recipe_id=:id';
$deleteRecipesStatement = $db->prepare($query);
$deleteRecipesStatement->execute([
    'id' => $id,
]) or die(print_r($db->errorInfo()));

$query = 'SELECT * FROM recipes WHERE is_enabled = TRUE';
$recipesStatement = $db->prepare($query);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

foreach ($recipes as $recipe) {
?>
<p><?php echo $recipe['author']; ?></p>
<?php
}