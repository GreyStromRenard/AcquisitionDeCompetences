<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>La page web de <?php echo "Mathys"; ?> </title>
        </head>
        <body>
            <h1>Ma page web</h1>
    
            <p>
                Bonjour Mathys !<br />
                Cette page contient du code HTML avec des balises PHP.<br />
                Nous sommes le <?php echo date('d/m/y h:i:s'); ?>
                Voici quelques petits tests :
            </p>

            <ul>
                <li style="color: blue;">Texte en bleu</li>
                <li style="color: red;">Texte en rouge</li>
                <li style="color: green;">Texte en vert</li>
            </ul>

            <?php echo "Merci le <strong>\"PHP\"</strong>"; //Sympa le PHP?>

        </body>
    </html>