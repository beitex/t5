<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/22/14
 * Time: 8:40 PM
 */
require_once (__DIR__ . '\src\beitex\Helper\Helper.php');

use beitex\Helper\Helper;

/**
 * Set Auto Loading
*/
if (is_readable(realpath(__DIR__ . '/composer.lock'))) {
    require_once realpath(__DIR__ . '/vendor/autoload.php');
}
else {
    throw new \Exception('Install the project first, use: composer install --dev');
}



$helper = new Helper();


echo " test3"  . $helper->displayVar();

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

// remark for git
//

$log->addWarning('log test');


