<?php
/*
	include require include_once  require_once

	都是包含文件的php语句

	include和require是只包含文件,不检查是否包含过
	include脚本继续执行,require中断脚本

	include_once和require_once包含文件并检查是否包含过,确保只包含一次
	若报错include_once脚本继续执行,require_once中断脚本

	四个语句的返回值

	无return,则包含成功返回,失败返回false
	有return,则返回return的值
*/

$a = 10;
$b = 20;
/*
function hello(){
	echo 'hello world';
}
hello();

*/
return [
	'host' => 'localhoost',
	'user' => 'root',
	'password' => '',
	'port' => 8000,
	'charset' => 'utf8'
];