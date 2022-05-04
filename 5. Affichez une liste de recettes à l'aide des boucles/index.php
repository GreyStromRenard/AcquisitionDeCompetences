<?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];
$mathys = ['Mathys Wagner', 'mathys.wagner@exmple.com', 'jU1', 18];

$users = [$mickael, $mathieu, $laurene, $mathys];

echo $users[3][1] . '<br>';

$lines = 4;
$counter = 0;

while ($counter < $lines) {
    echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br>';
    $counter++;
}

echo '<br>';

for ($lines = 0; $lines <= 3; $lines++) {
    echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br>';
}

echo '<br><br>';


?>

<a href="page.php">Affichez des recettes (suite)</a>