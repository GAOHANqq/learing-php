<?php
//对象的三个特点:继承,封装,多态

//多态 :利用类的继承,还方法的覆盖重写

class Animal
{
	public function jiao(){
		echo '~~~<br>';
	} 
}

class Cat extends Animal
{
	public function jiao(){
		echo '喵喵喵<br>';
	}
}
class Dog extends Animal
{
	public function jiao(){
		echo '汪汪汪<br>';
	}
}
class Sheep extends Animal
{
	public function jiao(){
		echo '咩咩咩<br>';
	}
}

//猫叫
$cat1 = new Cat;
$cat1->jiao();
//狗叫
$dog = new Dog;
$dog->jiao();
//羊叫
$sheep = new Sheep;
$sheep->jiao();
