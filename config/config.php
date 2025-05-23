<?php
spl_autoload_register(function ($class) {
    include  dirname(__DIR__).'/classes/class.' . $class . '.php';
});
?>