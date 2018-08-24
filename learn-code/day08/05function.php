<?php
/*
	匿名函数
	js中

	function func(){}
	var func = function(){}

	$.get(url,function(){})
*/

function func1(){
	echo 'func1';
}
//func1();

$func2 = function($arg){
	echo 'hello' . $arg;
};
var_dump($func2);
$func2('world');

echo '<br>';
//use的使用

$msg = 'global messa';
$func3 = function($arg) use ($msg){
	$msg = '111111';
};

echo $msg . '<br>';
$func3('aaa');
echo $msg;