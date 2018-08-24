<?php
/*
	类的自动加载


*/
define('ROOT_PATH',__DIR__);

function my_autoload($className)
{
	$classPath = str_replace('\\','/',$className);
	$classPath = ROOT_PATH . '/' . $classPath . 'Class.php';
	include $classPath;
}

spl_autoload_register(function($className){
	$classPath = str_replace('\\','/',$className);
	$classPath = ROOT_PATH . '/' . $classPath . 'Class.php';
	if(!file_exists($classPath)){
		exit($classPath . '文件不存在');
	}
	include $classPath;
});
$cat1 = new \Foo\Bar\Cat;
$dog1 = new \Foo\Bar\Dog;