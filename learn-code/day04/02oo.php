<?php

//面向对象:部分权限交给对象自身,关注彼此间的交互

//对象的创建,要创建一个类

//格式:
	/*	class 类名
		{
			public $变量;
			public function 方法名(){}
		}

修饰符:public protected private
	*/

class human
{
	public static $leg = 2;
	public $height = 170;
	public $name = '张三';
	public function greet(){
		echo '早上好';
	}
}
$zhangsan = new human;
print_r($zhangsan);

echo $zhangsan->name;
echo $zhangsan->height;
$zhangsan->greet();

//实例化对象时传参数?
//魔术方法  一两个下划线开头
//	_construct,类被实例化  new 时候调用
echo '<br>--------------------------<br>';

/*
class person
{
	public static $leg = 2;
	public $height = 170;
	public $name = '李四';

	public function __construct($name,$height){
		$this->name = $name;
		$this->height = $height;
	}
	public function __destruct(){
		echo $this->name . '挂了';
	}

	public function greet(){
		echo '早上好';
	}
}
$zhangsan = new person('张三',175);
$lisi = new person('李四',165);

unset($zhangsan);*/

//php里面的显式销毁和隐式销毁,php文件执行完,所有的变量都会被销毁
	//$this 指向实例化对象的本身

	//属性值的声明
		//可以是任意类型的变量

class people{
	public $name = 'wang';
	public $age = 'hi';
	public $gread = 2;

	public function walk(){
		echo 'Let us go!';
	}
}

$rick = new people;
print_r($rick);
echo '<br>';

echo $rick->name;
$rick->walk();
echo '<br>--------------------------<br>';

//构造函数
class human2
{
	public $height = 170;
	//public $height = 170 + 5;			php5不支持
	//public $height = 18 > 20;			php5不支持
	//public $height = rand(170,180);	php5/7不支持
	

	public function __construct(){
		$this->height += 5;
	}
}
$wangwu = new human2;
print_r($wangwu);


class first {
   function __construct() {
       print "In constructor\n";
       $this->name = "first";
   }

   function __destruct() {
       print "Destroying " . $this->name . "\n";
   }
}

$obj = new first();