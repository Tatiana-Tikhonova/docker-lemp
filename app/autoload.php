<?php
// If use composer
// include_once __DIR__ . '/vendor/autoload.php';
/**
 * Classes autoload function
 */
spl_autoload_register(function ($class) {


    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    var_dump($file);
    if (file_exists($file)) {
        include $file;
    }
});
