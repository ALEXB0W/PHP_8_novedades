<?php

/*========================================
Argumentos nombrados

PHP 8 permite nombrar los argumentos (parámetros) al momento de su ejecución sin tener que coincidir con el orden.
========================================*/

function parametros($uno, $dos, $tres)
{
    return $uno . ", " . $dos . ", " . $tres;
}

// PHP 7

$paramUno = "uno";
$paramDos = "dos";
$paramTres = "tres";

echo parametros($paramUno, $paramDos, $paramTres) . "<br/>";

// PHP 8

echo parametros(tres: "tres", uno: "uno", dos: "dos");
