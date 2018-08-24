<?php

class human
{
	public $name;
	public $age;

	public function eat(){
		echo '我在吃饭' . '<br>';
	}
	public function job(){
		echo '打猎,种田' . '<br>';
	}
}
//human类拓展,添加一个性别和上网的功能
//继承和重载  extends  方法的参数要一致,构造函数的参数可多个
			//子类就会继承父类所有公有的(public)和受保护(protected)的方法
			//修饰符的权限越来越弱或不变,不能越来越严格
			//只支持单继承
class newHuman extends human
{
	public $sex;
	public function internet(){
		echo '我在上网' . '<br>';
	}
	public function job(){
		echo '敲代码' . '<br>';
	}
}

$lisi = new human();
$lisi->job();

$zhangsan = new newHuman();
$zhangsan->job();

//权限修饰符  public protected private
	//在子类中,private不可被继承
class Foo
{
	public $a = 'aaaa';
	protected $b = 'bbbb';
	private $c = 'cccc';

	public function bar1(){
		echo 'bar1 public';
	}

	protected function bar2(){
		echo 'bar2 protected';
	}

	private function bar3(){
		echo 'bar3 private';
	}
}

class newFoo extends Foo
{
	public function getA(){
		return $this->a;
	}

	public function getB(){
		return $this->b;
	}

	public function getC(){
		return $this->c;
	}
	public function getBar1(){
		return $this->bar1();
	}
	public function getBar2(){
		return $this->bar2();
	}
	public function getBar3(){
		return $this->bar3();
	}

}
$foo = new newFoo;
echo $foo->getBar1();
echo $foo->getBar2();

