<?php
//函数,变量,常量--->检测是否定义??
$a = 10;
$b = 0;
var_dump(isset($a));//true
var_dump(isset($b));//true

//1.变量的检测
	//isset是php语法结构,检测是否存在 存在为true
	//unset  销毁变量
	//empty是内置函数,检测是否为空,为空时返回true,否则为false
	//在php中,0,'0','',null,[],用empty校验都返回true
echo '<br>';
var_dump(empty($a));//false
var_dump(empty($b));//true

//2.常量的检测  defined
define('PI',3.14);
var_dump(defined('PI'));
var_dump(defined('PI2'));

//3.函数的检测 function_exists
var_dump(function_exists('foo'));
function foo(){}