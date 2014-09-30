<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/22/14
 * Time: 8:40 PM
 */

require 'vendor/autoload.php';

echo "test2";

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

// remark for git

$log->addWarning('hernja bolshaja');


