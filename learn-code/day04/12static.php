<?php
//类的静态方法和静态属性
	//静态方法/属性是所有类的公有属性和方法
	//调用时不需要实例化,使用 类名::  调用 
	//静态方法只能调用静态属性,不能调用一般属性

class Human
{
	public static $legs = 2;
	public $name;

	public static function run(){
		echo '我再跑';
	}
	public function eat(){
		//echo Human::$legs;
		echo self::$legs;
		self::run();
	}
}
echo Human::$legs . '<br>';
echo Human::run() . '<br>';

$zhangsan = new Human;
$zhangsan->eat();
echo '<br>';

//类常量
	//可以是标量(字符串,数组,null,bool,整型/浮点型),表达式,算数运算符
	//不可以是函数返回值,对象
	//定义时使用const关键字,不需要$符号,调用时用 ::
class Foo
{
	const constant = '我是常量';
	public $bar = 123;

	const operator = 20 / 10;//不推荐使用
	const exp = 20 > 10;//不推荐使用
	//const func = rand(5,10);
}
echo Foo::constant;