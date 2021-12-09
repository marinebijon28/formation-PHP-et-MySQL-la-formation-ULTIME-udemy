<?php

/*
    Condition if
*/

// declaration and initialization 
$age = 20;

// if $age is upper or equivalent at 18
// it's boolean if condition it's true, it's execute the code in if
if ($age >= 18)
{
    echo "Vous êtes major <br/>";
}

// the condition is true so he runs the code
if (true) {
    echo "Vous êtes major <br/>";
}

// the condition is false so he not runs the code
if (false) {
    echo "Vous êtes mineur <br/>";
}

// reset the value of the variable
$age = 17;

// if $age is lower at 18
// it's boolean if condition it's true, it's execute the code in if
if ($age < 18)
{
    echo "Vous êtes mineur <br/>";
}
?>