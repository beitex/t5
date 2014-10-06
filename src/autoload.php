<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/5/14
 * Time: 3:02 PM
 */


function my_autoload ($pClassName) {
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

/**
 * Set Auto Loading
 */
if (is_readable(realpath(__DIR__ . '/../composer.lock'))) {
    require_once realpath(__DIR__ . '/../vendor/autoload.php');
}
else {
    throw new \Exception('Install the project first, use: composer install --dev');
}