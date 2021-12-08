<?php
    // generate automatically keys
    $identite = array(15, 'Nicolas', 'Dupont', 20);
    // tab[0] = 15
    // tab[1] = 'Nicolas'
    // tab[2] = 'Dupont'
    // tab[3] = 20

    // old version
    $identite = array(
        'id' => 15,
        'prenom' => 'Nicolas',
        'nom' => 'Dupont',
        'age' => 20
    );

    // new version
    $identite = [
        'id' => 15,
        'prenom' => 'Nicolas',
        'nom' => 'Dupont',
        'age' => 20
    ];

    // display a value in the tab
    echo "Bonjour " . $identite['prenom'] . " " . $identite['nom'];
?>