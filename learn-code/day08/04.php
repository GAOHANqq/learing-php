<?php
spl_autoload_register(function($className){
	$tmp= explode('\\',$className);
	$class = end($tmp);
	$classPath = './classes/' . $class . '.php';
	
	print_r($classPath);
	include $classPath;
	//			./classes/CatClass.php
	//include './classes/CatClass.php';
});

//$cat1 = new \Foo\Bar\CatClass;

$cat1 = new \Foo\Bar\Cat;