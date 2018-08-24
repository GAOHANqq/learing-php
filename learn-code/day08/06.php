<?php
function func1(){
	return $func = function(){
		echo '匿名函数';
	};
}
//$res = func1();
//$res();

function func2(){
	$foo = 1;
	return function () use (&$foo){
		echo $foo;
		$foo++;
	};
}

$res = func2();
for($i=0;$i<10;$i++){
	$res();
	echo '<br>';
}

