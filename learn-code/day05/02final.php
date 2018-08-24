<?php
//final 用来修饰类和类的方法   
	//如果父类中的方法被声明为 final，则子类无法覆盖该方法。
	//如果一个类被声明为 final，则不能被继承。
	//特点:
			//私有的构造函数
			//私有的静态属性,用来存储实例
			//静态的共有方法
			//防止克隆
			//防止继承



//父类
class Foo
{
	public function bar1(){
		echo '我可被继承';
	}
	//父类中的方法被声明为 final，则子类无法覆盖该方法。
	final public function bar(){
		echo 'hello';
	}
}
//子类
class NewFoo extends Foo
{

}

$newFoo = new NewFoo;

$newFoo->bar1();
$newFoo->bar();
/*
//父类
class BaseClass {
   public function test() {
       echo "可继承";
   }
   
   final public function moreTesting() {
       echo "不可继承";
   }
}
//子类
class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "ChildClass::moreTesting() called\n";
   }
}*/