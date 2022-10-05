<?php

/*========================================
Compilador JIT

Una de las principales novedades de PHP 8 es el compilador JIT (Just In Time), que permite compilar partes del código sobre la marcha en tiempo de ejecución.
El compilador JIT podrá habilitarse en el archivo php.ini, permitirá almacenar el código nativo de los ficheros php en un apartado adicional de la memoria compartida OPcache de esta manera:
========================================*/

# Enable JIT in php.ini
// opcache.enable=1
// opcache.jit_buffer_size=100M
// opcache.jit=tracing