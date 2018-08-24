<?php
require 'vendor/autoload.php';

use Monolog\Logger;

$logger = new Logger('logger');
print_r($logger);

/*
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');
print_r($log);

*/