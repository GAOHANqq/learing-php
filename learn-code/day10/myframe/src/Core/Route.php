<?php
namespace App\Core;
class Route
{
	public function run(){
		define('BASE_PATH',dirname(__DIR__));
		define('APP_PATH',BASE_PATH.'/src');

		$routes = [
			'/' => 'App\\Controller\\Home:index',
			'/user/info' => 'App\\Controller\\User:info',
		];

			//print_r($_SERVER);
		$pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
			//print_r($pathInfo);

		$controller = 'App\\Controller\\Home';
		$action = 'index';
		foreach($routes as $route => $classname){
			if($route == $pathInfo){
				$tmp = explode(':',$classname);
				$controller = $tmp[0];
				$action = $tmp[1];
				break;
			}
		}

		$obj = new $controller;
		call_user_func_array([$obj,$action],[]);
	}
}
