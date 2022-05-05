<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Site de recette - Demande de contact</title>
</head>
<body>
    <?php include_once('includes/header.php'); ?>
    <div class="container">
        <h1>Demande de contact</h1>

        <form action="submit_form.php" method="POST">
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Votre Email...">
            </div>
            <div>
                <label for="message">Votre message</label>
                <textarea name="message" placeholder="Exprimez vous..."></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
    <?php include_once('includes/footer.php'); ?>
</body>
</html>