<?php

include '../vendor/autoload.php';

$route = new App\Core\Route;

try
{
	$route->run();
}
catch(Expection $e)
{
	$e->getMessage();
}