<?php
//对象的三个特点:继承,封装,多态

//多态 :利用类的继承,还方法的覆盖重写

class Animal
{
	//传参直接通过实例化父类(内部new)调用子类方法
	public function jiao($animal){
		$obj = new $animal;
		$obj->jiao();
	} 
}

class Cat
{
	public function jiao(){
		echo '喵喵喵<br>';
	}
}
class Dog
{
	public function jiao(){
		echo '汪汪汪<br>';
	}
}
class Sheep
{
	public function jiao(){
		echo '咩咩咩<br>';
	}
}
$animal = new Animal;
$animal->jiao('Cat');
$animal->jiao('Dog');
$animal->jiao('Sheep');