<?php
/*
抽象类和抽象方法
	1.用abstract 关键词修饰.写在权限修饰符之前
	2.抽象方法没有方法体
	3.抽象类内部可以没有抽象方法,但有抽象方法,类则必须是抽象类
	4.继承抽象类的子类,必须实现父类中的所有抽象方法,或者定义为抽象类
	5.抽象类不能实例化
	6.抽象方法不能定义为private



基类

*/
abstract class Animal
{
	public $name;
	
	abstract public function eat();

	abstract public function jiao();
	
}

class Dog extends Animal
{
	public function eat(){
		echo '~~~';
	}

	public function jiao(){
		echo '汪汪汪';
	}
}

class YellowDog extends Dog
{
	public function eat(){
		echo '###';
	}
}

$dog = new Dog;