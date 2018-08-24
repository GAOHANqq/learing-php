<?php
namespace App\Core;

class Route
{
    public function run(){
		//http://localhost/day09/framework/index.php?a=user&c=info
		if(!isset($_GET['c']) || !isset($_GET['a'])){
			exit('路由错误');
		}

		$className = ucfirst(strtolower($_GET['c']));

		// App\Controller\User
		$controller= 'App\\Controller\\User' . ucfirst($_GET['c']);
		if(!class_exists($controller)){
			exit('[' . $controller . ']控制器不存在');
		}

		$obj = new $controller;
		// $obj->info();
		$action = $_GET['a'];
		if(!method_exists($obj,$action)){
			exit('[' . $controller . ']中的方法[' . $action . '不存在');
		}

		//$obj->$action();
		call_user_func_array([$obj,$action],[]);
	}
}
