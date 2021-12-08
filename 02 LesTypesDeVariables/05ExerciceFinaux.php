<?php

    // initialisation tab
    $identite = [
        'id' => 15,
        'prenom' => 'Nicolas',
        'nom' => 'Dupont',
        'age' => 15,
    ];

    // display age 50 years old
    echo "Bonjour " . $identite['prenom'] . " " . $identite['nom'] . " dans 50 vous aurez " . $identite['age'] + 50 . " années"

?>