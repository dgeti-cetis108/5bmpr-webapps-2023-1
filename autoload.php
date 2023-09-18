<?php

return spl_autoload_register(function ($class) {
    $path = APP_DIR . $class;
    // cambiar las diagonales invertidads por normales
    $path = str_replace('\\', '/', $path);
    // agregar la extensión
    $path .= '.php';

    // validar la existencia del archivo en el sistema de almacenamiento
    if (is_readable($path)) {
        // si se puede acceder al archivo, agregarlo
        require_once $path;
    } else {
        exit("No se puede cargar el archivo $path");
    }
});
