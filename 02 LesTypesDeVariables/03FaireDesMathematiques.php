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

    // delcaration and initialization
    $premierNombre = 25;
    $deuxiemeNombre = 5;

    echo $premierNombre * $deuxiemeNombre . '<br/>';
    echo $premierNombre + $deuxiemeNombre . '<br/>';
    echo $premierNombre - $deuxiemeNombre . '<br/>';
    echo $premierNombre / $deuxiemeNombre . '<br/>';

    $operationCalcul = (((5 * 5) /5) + 158);
    echo $operationCalcul . '<br/>';

    // use the value operationCalcul for divide and reset value operationcalcul which the result
    $operationCalcul = $operationCalcul / 5;
    echo $operationCalcul . '<br/>';
    // reset value
    $operationCalcul = $operationCalcul * 5;
    
    //same

    // use the value operationCalcul for divide and reset value operationcalcul which the result
    $operationCalcul /= 5;
    echo $operationCalcul . '<br/>';
    // reset value
    $operationCalcul *= 5;
    
    // incrementation
    // post incrementation
    $operationCalcul = $operationCalcul + 1;
    $operationCalcul += 1;
    $operationCalcul++;
    // pre incrementation
    ++$operationCalcul;
    echo $operationCalcul . '<br/>';

    // decrementation
    // post decrementation
    $operationCalcul = $operationCalcul - 1;
    $operationCalcul -= 1;
    $operationCalcul--;
    // pre decrementation
    --$operationCalcul;
    echo $operationCalcul;

?>