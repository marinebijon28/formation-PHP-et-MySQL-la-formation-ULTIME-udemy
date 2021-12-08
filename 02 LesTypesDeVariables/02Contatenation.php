<?php

    $direBonjour = "Hello";
    $destination = "World";

    // not good manner
    // concat and replace variables with their values
    echo "$direBonjour $destination comment allez-vous ? <br/>";

    // it's good manner
    // concat the variables with space
    echo $direBonjour . " " . $destination . " comment allez-vous ? <br/>";
?>