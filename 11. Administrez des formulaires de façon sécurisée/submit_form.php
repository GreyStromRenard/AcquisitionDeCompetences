<?php

if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !isset($_POST['message']) || empty($_POST['message'])) {
    echo 'Le formulaire doit être complet.';
    return;
}

$email = $_POST['email'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recette - Demande de contact reçue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include_once('includes/header.php'); ?>
    <div class="container">
            <h1>Message bien reçu</h1>
            
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo $email; ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
                </div>
            </div>
        <?php include_once('includes/footer.php'); ?>
    </div>
</body>
</html>