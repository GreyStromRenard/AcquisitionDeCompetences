<?php

$isEnabled = true;
$isOwner = false;
$isAdmin = true;

if ($isEnabled){
    echo "Vous êtes autorisé(e) à accéder au site ✅<br>";
} elseif (! $isAllowedToEnter) {
    echo "Accès refusé ❌<br>";
}

$isAllowedToEnter = "Oui";

if ($isAllowedToEnter == "Oui") {
    echo "Bienvenue !<br>";
} elseif ($isAllowedToEnter == "Non") {
    echo "Vous n'avez rien à faire ici<br>";
} else {
    echo "J'ai pas compris...<br>";
}

if (($isEnabled && $isOwner) || $isAdmin) {
    echo "Bienvenue sur le site ! ✅<br>";
} else {
    echo "Accès refusé 🚫<br>";
}

$chickenRecipesEnabled = true;
?>

<?php if ($chickenRecipesEnabled): ?>

<h1>Liste des recettes à base de poulet</h1>

<?php endif;

$grade = 10;

switch ($grade) {
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

$userAge = 18;

$isAdult = ($userAge >= 18);