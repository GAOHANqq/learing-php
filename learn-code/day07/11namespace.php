<?php
/*
	动态的变量 $$str
	动态的函数 $$func()
	动态的类 $$class()
*/

namespace Foo\Bar2;
include '12namespace1.php';

$zhangsan = new \Foo\Human;
print_r($zhangsan);
echo '<br>';

$str = 'Foo\Human';//动态命名空间
$zhangsan= new $str;
print_r($zhangsan);

echo '<br>';
echo __NAMESPACE__;
echo '<br>';

echo __FILE__;
echo '<br>';

echo __DIR__;
echo '<br>';

//use 操作符   -->也可以用来use方法
use Foo\Human;
//use {Foo\Human,Foo\Human2}; -->php7支持 php5不支持
$zhangsan = new Human;
print_r($zhangsan);
echo '<br>';

//use 操作符
use Foo\Human as Zhang;
$zhangsan = new Zhang;
print_r($zhangsan);

