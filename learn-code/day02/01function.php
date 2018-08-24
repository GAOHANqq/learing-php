<?php
//php函数
	//封装,可重复使用

//	12 = 3 * 4  多参数
function a($a,$b){
	return $a * $b;
}
$a = 3;
$b = 4;
echo a($a,$b). '<br>';

//6 = 2 * 3 单参数
function double2($x){
	return 2 * $x;
}
echo double2(3);

echo '<br>';
function s($a,$b){
	return $a * $b;
}
$x = 3;
$y = 4;
echo '面积1为:' . s($x,$y) . '<br>';
echo '面积2为:' . s(5,6) . '<br>';
echo '面积3为:' . s(7,8) . '<br>';

//参数带默认值的函数(默认值要写到最后)
function foo($x,$y,$z=1){
	return 3 * $x + 2 * $y + $z;
}
echo foo(3,2,10) . '<br>';


//&$x   传的是地址,而不是值
function foo1(&$x){
	$x = 20;
}
$a = 10;
echo $a;//10
echo foo1($a) . '<br>';
echo $a . '<br>';//20

//函数的执行权
	//函数定义而不调用,函数无作用
	//所有语句执行完,或者遇到return,则交回执行权
function foo2(){
	echo 'hello world';
}
echo 'hi';
foo2();
echo 'en','<br>';

//函数内部的变量作用域
	//函数内部的变量,形参和内部自己定义的
	//***函数内部改变全局变量 golbal
$a = 1;
$b = 2;
function foo3($x,$y){
	$a = 10;
	$b = 20;
	return $a + $b + $y;
}
echo $a,'~',$b,'<br>';
foo3($a,$b);
echo $a,'~',$b,'<br>';


//php内置函数 
	//call_user_func 
	//call_user_func_array