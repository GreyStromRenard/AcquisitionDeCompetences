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

        <form action="submit_contact.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Votre Email...">
            </div>
            <div>
                <label for="message" class="form-label">Votre message</label>
                <textarea name="message" class="form-control" placeholder="Exprimez vous..."></textarea>
            </div>
            <div class="mb-3">
                <label for="screenshot" class="form-label">Votre capture d'écran</label>
                <input type="file" name="screenshot" id="screenshot" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <?php include_once('includes/footer.php'); ?>
</body>
</html>