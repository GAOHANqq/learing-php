<?php
//命名空间的使用
namespace Foo\Bar;

include '12namespace1.php';

class Human
{
	public $name = '李四';
}

$lisi = new Human(); //Foo\Bar\Human
print_r($lisi);
echo '<br>';

//完全限定名称  \   与绝对路径相似
$zhangsan = new \Foo\Human;  //Foo\Human
print_r($zhangsan);

/*
调用命名函数外部的方法,类时,也需要用完全限定名称的方式(绝对路径)
	$Car = new \Car;
	print_r($Car);
	\Foo\Bar\函数();

	eat();---->当前命名空间有函数时,调用当前的;没有时,调用全局的
*/