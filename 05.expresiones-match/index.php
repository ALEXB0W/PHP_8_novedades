<?php

/*========================================
Expresiones match

Las nuevas expresiones match son similares a switch y tienen las siguientes características:

    · Match es una expresión; esto quiere decir que pueden ser almacenadas como variables o devueltas.
    · Match soporta expresiones de una línea y no necesitan romper con la declaración break.
    · Match hace comparaciones estrictas.
========================================*/

# PHP 7

switch (8) {
    case '8':
        $result = "Esto es un texto";
        break;
    case 8:
        $result = "Esto es un número";
        break;
}

echo '<pre>';
print_r($result);
echo '</pre>';

# PHP 8

echo match (8) {
    '8' => "Esto es un texto",
    8 => "Esto es un número"
};
