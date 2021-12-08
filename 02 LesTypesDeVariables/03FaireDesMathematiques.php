<?php
/* 
    operators :

    multiply => *
    add => +
    substract => -
    divide => /
    modulo => %
    exponential => **
*/
    $premierNombre;
    $deuxiemeNombre;

    echo $premierNombre * $deuxiemeNombre;
    echo $premierNombre + $deuxiemeNombre;
    echo $premierNombre - $deuxiemeNombre;
    echo $premierNombre / $deuxiemeNombre;

    $operationCalcul = (((5 * 5) /5) + 158);
    echo $operationCalcul;

    // use the value operationCalcul for divide and reset value operationcalcul which the result
    $operationCalcul = $operationCalcul / 5;
    echo $operationCalcul;
    // reset value
    $operationCalcul = $operationCalcul * 5;
    
    //same

    // use the value operationCalcul for divide and reset value operationcalcul which the result
    $operationCalcul /= 5;
    echo $operationCalcul;
    // reset value
    $operationCalcul *= 5;
    
    // incrementation
    // post incrementation
    $operationCalcul = $operationCalcul + 1;
    $operationCalcul += 1;
    $operationCalcul++;
    // pre incrementation
    ++$operationCalcul;
    echo $operationCalcul;

    // decrementation
    // post decrementation
    $operationCalcul = $operationCalcul - 1;
    $operationCalcul -= 1;
    $operationCalcul--;
    // pre decrementation
    --$operationCalcul;
    echo $operationCalcul;

?>