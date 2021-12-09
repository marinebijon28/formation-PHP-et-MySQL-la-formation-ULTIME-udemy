<?php

/* 
    The logicals operators 

    == equivalent
    != different
    > superior
    >= upper or equivalent
    < lower
    <= lower or equivalent
    === equivalent and verify is same type
    !== different and verify isn't same type 
*/

// initialization 
$age = 15;

// if $age is lower at 18
if ($age < 18)
{
    echo 'Vous êtes mineur <br/>';
}

// if $age is equal at 18
if ($age == 18)
{
    echo 'vous êtes enfin majeur <br/>';
}

// if $age is upper at 18
if ($age > 18)
{
    echo 'vous êtes major <br/>';
}

// if $age is upper or equivalent at 18
if ($age >= 18)
{
    echo "Vous êtes major <br/>";
}

// declaration and initializations 
$pseudo = "TINTIN";
$pwd = "LUNE";

// the condition if it's true if $pseudo equivalent TINTIN 
if ($pseudo == "TINTIN")
{
    echo "Le pseudo est bon <br/>";
    // the condition if it's true if $pseudo equivalent LUNE
    if ($pwd == "LUNE")
        echo "Le mot de passe est correct <br/>";
}
if ($pseudo != "TINTIN")
    echo "Le pseudo n'est pas correct <br/>";
?>