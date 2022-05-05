<?php

$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César'];

$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César');

echo $recipes[1];

    echo '<br>';

$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mathys.wagner@exemple.com',
    'enabled' => true,
];

echo $recipe['title'];

    echo '<br>';

$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0] . '<br>';
}

foreach ($recipe as $value){
    echo $value;
}

    echo '<br>';

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

echo '<br>';

foreach ($recipes as $recipe) {
    echo $recipe['title'] . ' contribué(e) pas : ' . $recipe['author'] . PHP_EOL . '<br>';
}

    echo '<br><br>';

$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach ($recipe as $property => $propertyValue) {
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL . '<br>';
}

    echo '<br>';

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
];

echo '<pre>';
print_r($recipes);
echo '</pre>';

    echo '<br>';

$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe)){
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !';
}

    echo '<br>';

$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

if (in_array('Mathieu Nebra', $users))
{
    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
}

if (in_array('Arlette Chabot', $users))
{
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
}

    echo '<br>';

$users = [
    'Mathys Wagner',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$postionMathys = array_search('Mathys Wagner', $users);
echo '"Mathys" se trouve en position ' . $postionMathys . '<br>';

$positionLaurène = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . '<br>';

echo '<br>';
?>

<a href="page.php">Affichez des recettes (suite 2)</a>
