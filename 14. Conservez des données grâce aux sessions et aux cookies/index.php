<?php

include_once('includes/variable.php');
include_once('includes/functions.php');

session_start();

if(isset($_POST['email'])) {
    $value = $_POST['email'];

    setcookie(
        'LOGGED_USER',
        $value,
        [
            'expires' => time() + 365*24*3600,
            'secure' => true,
            'httponly' => true,
        ]
    );
}

?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include_once('includes/header.php'); ?>

    <div class="container">
        <h1>Site de recettes</h1>

        <?php 
            // if(!$loggedUser['email'] && !$_COOKIE['LOGGED_USER']) {
            //     include_once('includes/login.php');
            // }

            include_once('includes/login.php');
        ?>

        <?php if (isset($loggedUser)): ?>
            <?php foreach(getRecipes($recipes) as $recipe) : ?>
                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
                </article>
            <?php endforeach ?>
        <?php endif; ?>
    </div>

    <?php include_once('includes/footer.php'); ?>
</body>
</html>