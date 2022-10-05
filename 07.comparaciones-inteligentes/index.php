<?php

/*========================================
Comparaciones inteligentes

En PHP 7 cuando se compara el 0 con una cadena de texto devolvía un verdadero.
En PHP 8 convierte la cadena de texto en número y si no es valor numérico devuelve falso.
========================================*/

# Operador ternario
echo 0 == 'cualquier texto' ? "verdadero" : "falso";
echo '<br />';
echo 0 == '0' ? "verdadero" : "falso";
