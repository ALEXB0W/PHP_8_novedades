<?php

/*========================================
Expresión throw

En PHP 8 el throw en lugar de una declaración, se considera una expresión y se puede usar en más casos.
========================================*/

# PHP 7

function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("El valor debe ser menor a 1");
    }
    return true;
}

checkNum(1);

# PHP 8

$array = [];

$value = !empty($array) ? reset($array) : throw new Exception("Está vacía la matriz");

echo '<pre>';
print_r($value);
'</pre>';
