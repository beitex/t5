<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/5/14
 * Time: 2:30 PM
 */

require_once (__DIR__ . '\..\src\autoload.php');




use beitex\Helper\Helper;
use beitex\DAL\mongo;





$helper = new Helper();
$mongo = new Mongo();


echo " test3"  . $mongo->displayVar();

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

// remark for git
//

$log->addWarning('auto log super test');