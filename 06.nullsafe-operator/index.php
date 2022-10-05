<?php

/*========================================
Nullface operator

Con PHP 7 para comprobar que una propiedad de un objeto o de un método no devuelve NULL se hacía una condición anidada.
En PHP 8 el operador NullSafe si encuentra en cualquiera de las propiedades el valor NULL, anula la ejecución de toda la cadena.
========================================*/

$objeto = (object) array(

    "propiedad1a" => (object) [

        "propiedad2a" => (object) [

            "propiedad3a" => "valor1a",
            "propiedad3b" => "valor1b"
        ],

        "propiedad2b" => (object) [

            "propiedad3a" => null,
            "propiedad3b" => null
        ]
    ],

    "propiedad1b" => null
);

# PHP 7

$variable = null;

if ($objeto->propiedad1a !== null) {
    if ($objeto->propiedad1a->propiedad2a !== null) {
        if ($objeto->propiedad1a->propiedad2a->propiedad3a !== null) {
            $variable = $objeto->propiedad1a->propiedad2a->propiedad3a;
        }
    }
}

echo '<pre>';
print_r($variable);
'</pre>';

# PHP 8

$variable2 = $objeto?->propiedad1a?->propiedad2a?->propiedad3a;
echo '<pre>';
print_r($variable2);
'</pre>';

# Valor null

$variable3 = $objeto?->propiedad1b?->propiedad2a?->propiedad3a;
echo '<pre>';
var_dump($variable3);
'</pre>';
