<?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];
$mathys = ['Mathys Wagner', 'mathys.wagner@exmple.com', 'jU1', 18];

$users = [$mickael, $mathieu, $laurene, $mathys];

echo $users[1][1];

$lines = 1;

while ($lines <= 100) {
    echo "Je ne suis pas très beau mais quand même.";
    $lines++;
}