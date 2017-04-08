<?php

namespace Router;

require __DIR__ . '/functions.php';

spl_autoload_register(function($class) {
    if (strpos($class, 'Router\\') === 0) {
        $name = substr($class, strlen('Router'));
        require __DIR__ . strtr($name, '\\', DIRECTORY_SEPARATOR) . '.php';
    }
});
