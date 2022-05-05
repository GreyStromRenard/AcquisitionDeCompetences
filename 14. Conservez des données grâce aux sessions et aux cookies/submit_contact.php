<?php

if (
    !isset($_POST['email']) || 
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || 
    !isset($_POST['message']) ||
    empty($_POST['message']) ||
    !isset($_FILES['screenshot'])) {

    echo 'Le formulaire doit être complet.';
    return;

    } elseif ($_FILES['screenshot']['error'] === 0 && $_FILES['screenshot']['size'] <= 100000000) {
            
            $fileInfo = pathinfo($_FILES['screenshot']['name']);
            $extension = $fileInfo['extension'];
            $allowdExtensions = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($extension, $allowdExtensions)) {

                move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
                echo "L'envoi a bien été effectué !";

            }
            
    } else {
        echo 'Votre image n\'a pas pu chargé correctement'; 
    }

$email = $_POST['email'];
$message = $_POST['message'];
$file = $_FILES['screenshot']['name'];

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
                    <p class="card-text"><b>Fichier</b> : <img class="img-thumbnail rounded" src="<?php echo 'uploads/' . $file ?>" alt=""></p>
                </div>
            </div>
        <?php include_once('includes/footer.php'); ?>
    </div>
</body>
</html>