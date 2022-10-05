<?php

/*========================================
MOSTRAR ERRORES
========================================*/
ini_set('display_errors', 1); # Colocar 0 si no deseas que aparezcan los errores en el navegador.
ini_set('log_errors', 1); # Con esta línea indicamos que queremos crear un nuevo archivo de errores.
ini_set('error_log', "/Applications/MAMP/htdocs/practicas/novedades-php-8/errores/php_error.log"); # Indica la ruta para guardar el archivo.

/*========================================
FATAL ERROR

Este tipo de errores aborta la ejecución del programa e interrumpe su completo funcionamiento.
Ocurre, por ejemplo, cuando intentas ejecutar una función y no existe en tu código o intentas iniciar un objeto de una clase que aún no se a declarado.
========================================*/

class ClaseUno
{
    public function FuncionUno()
    {
    }
}

$variable = new ClaseUno();
$variable->FuncionUno();

/*========================================
WARNING

Los errores de advertencia no abortan la ejecución del programa, esto quiere decir que el programa sigue su curso pero puede no funcionar correctamente o ser la causa de que más adelante se produzcan errores más graves.
========================================*/

$variable1 = "Hola soy la variable 1";

echo $variable1;

/*========================================
PARSE ERROR

Los errores de tipo Análisis Gramatical, como su nombre lo indica, aparece cuando ocurre un error de sintaxis. PHP lo toma como un error igual de grave como el FATAL ERROR ya que aborta la ejecución del programa.
El error más común  es cuando se olvida colocar el punto y coma al final de una línea de código, ya que el punto y coma es estricto en PHP.
========================================*/

$array = [0,1,2,3]; # <-- Falta el punto y coma.