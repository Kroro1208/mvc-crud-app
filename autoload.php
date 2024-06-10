<?php
spl_autoload_register(function ($class) {
    $archive = __DIR__ . "/" . str_replace("\\", "/", $class) . ".php";
    if (is_file($archive)) {
        require_once $archive;
    }
});
