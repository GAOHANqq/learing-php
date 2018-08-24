<?php
//常量
	// define ( 键, 值 [, 可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认(false)是大小写敏感的)
//变量	
$pi = 3.14;
$r = 10;
$c = 2 * $pi * $r;
$s = $pi * $r * $r;
echo '周长:',$c;	
echo '<br>';
echo '面积:' . $s;
echo '面积:',$s;
echo '<br>';
//常量(一般大写)
	//常量定义:define(name,value)

define('PI',3.14);
echo PI;
//判断是否定义常量
$isDef = defined('PI');
var_dump($isDef);

define('ROOT','D:\wamp64\www\day01');
echo ROOT;
echo '<br>';


//数组遍历
//1
$cars=array("Tom","Rick","Mary");
$arrLength = count($cars);
for($x=0;$x<$arrLength;$x++){
	echo $cars[$x];
	echo '<br>';
};
//2
$name=array("Tom"=>'18',"Rick"=>'20',"Mary"=>'22');
echo 'Tom is' . $name['Tom'] . ' years old';
echo '<br>','------------魔术常量-------------------','<br>';

echo '这是第 " '. __LINE__ .' " 行' . '<br>';
echo '文件地址:" '. __file__ . ' "' . '<br>';
echo '文件地址:" '. __DIR__ . ' "' . '<br>';