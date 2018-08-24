<?php
//	this parent self
	//只能在内部使用,在外部不能使用
		//this实例化对象本身
		//parent指向父类 调用时用 :: 连接
		//self指向类本身,用来调用静态属性或方法
class human
{
	public $name;
	public $age;

	public static $legs = 2;
	
	public function __construct($name,$age){
		$this->name = $name;
		$this->age = $age;
	}
	public function eat(){
		echo '我在吃饭' . '<br>';
	}
	public function job(){
		echo '打猎,种田' . '<br>';
	}
}
class newHuman extends human
{
	public $sex;

	public function __construct($name,$age,$sex){
		//调用父类的构造函数   parent::方法名()
		parent::__construct($name,$age);
		$this->sex = $sex;
	}

	public function internet(){
		//调用类本身 self::$变量名  self::方法名()
		echo self::$legs;
		echo '我在上网' . '<br>';
	}
	public function job(){
		echo '敲代码' . '<br>';
	}
}

$zhangsan = new newHuman('张三',18,'男');
print_r($zhangsan);
$zhangsan->internet();
echo human::$legs;