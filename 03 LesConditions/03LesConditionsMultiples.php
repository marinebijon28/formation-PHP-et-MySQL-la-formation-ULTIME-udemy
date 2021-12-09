<?php

/* 
    The multiples conditions
    || OR
    && AND
*/

$pseudo = "TINTIN";
$pwd = "LUNE";

// it's multiple condition both conditions must be true
// the condition if it's true if $pseudo equivalent TINTIN it's same for $pwd
if ($pseudo == "TINTIN" AND $pwd == "LUNE")
{
    echo "Cest le bon pseudo et le bon mot de passe <br/>";
}
// it's same : && equal and
if ($pseudo == "TINTIN" && $pwd == "LUNE")
{
    echo "Cest le bon pseudo et le bon mot de passe <br/>";
}

// it's multiple condition one condition must be true
// the condition if it's true if $pseudo equivalent TINTIN or it's $pwd equal LUNE and it's same type
if ($pseudo == "TINTIN" OR $pwd == "LUNE")
{
    echo "Cest le bon pseudo et le bon mot de passe <br/>";
}
// it's same : || equal or
if ($pseudo == "TINTIN" || $pwd == "LUNE")
{
    echo "Cest le bon pseudo et le bon mot de passe <br/>";
}



// it's multiple condition both conditions must be true
// the condition if it's true if $pseudo equivalent TINTIN and it's having same type of age, it's same for $pwd
if ($pseudo === "TINTIN" AND $pwd === "LUNE")
{
    echo "Cest le bon pseudo et le bon mot de passe <br/>";
}
// it's same : && equal and
if ($pseudo === "TINTIN" && $pwd === "LUNE")
{
    echo "Cest le bon pseudo et le bon mot de passe <br/>";
}

// it's multiple condition one condition must be true
// the condition if it's true if $pseudo equivalent TINTIN and it's having same type of age or it's $pwd equal LUNE and it's same type
if ($pseudo === "TINTIN" OR $pwd === "LUNE")
{
    echo "Cest le bon pseudo et le bon mot de passe <br/>";
}

if ($pseudo === "TINTIN" || $pwd === "LUNE")
{
    echo "Cest le bon pseudo et le bon mot de passe <br/>";
}

?>