<?php

/* 
    condition if else
*/

    // initialisation
    $pseudo = "TINTIN";
    $pwd = "LUNE";

    // multiple condition
    // if $pseudo equivalent "TINTIN" and $pwd equivalent "LUNE" and same type for two variables
    if ($pseudo === 'TINTIN' AND $pwd === "LUNE")
    {
        echo "Pseudo et mot de passe valide <br/>";
    }
    else
    {
        // if $pseudo not equivalent "TINTIN" or $pwd not equivalent "LUNE"
        echo "Pseudo et mot de passe invalide <br/>";
    }

    // multiple condition
    // if $pseudo equivalent "TINTIN" and $pwd equivalent "LUNE" and same type for two variables
    if ($pseudo === 'TINTIN' && $pwd === "LUNE")
    {
        echo "Pseudo et mot de passe valide <br/>";
    }
    else
    {
        // if $pseudo not equivalent "TINTIN" or $pwd not equivalent "LUNE"
        echo "Pseudo et mot de passe invalide <br/>";
    }

    // multiple condition
    // if $pseudo equivalent "TINTIN" and $pwd equivalent "LUNE" and same type for two variables
    if ($pseudo === 'TINTIN' && $pwd === "LUNE")
        echo "Pseudo et mot de passe valide <br/>";
    else
        // if $pseudo not equivalent "TINTIN" or $pwd not equivalent "LUNE"
        echo "Pseudo et mot de passe invalide <br/>";
    

    $age = 17;

    // if $age upper or equivalent at 18
    if ($age >= 18)
        echo "Vous êtes majeur <br/>";
    else
        // if $age lower at 18
        echo "Vous êtes mineur <br/>";
?>