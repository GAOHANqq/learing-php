<?php
class human
{
	public $name;
	protected $money;
	public function __construct($name,$money){
		$this->name = $name;	
		$this->money = $money;	
	
	}
	public function getMoney(){
		return $this->money;
	}

	public function borrow($money){
		$this->money += $money;
	}
	public function send($money){
		$this->money -= $money;
	}
}

$zhangsan = new human('张三',10000);
$lisi = new human('李四',5000);

echo '张三有钱:' . $zhangsan->getMoney();
echo '李四有钱:' . $lisi->getMoney();


//关于继承public protected private的权限

//父类
class obj
{
	public $a = '111';
	protected $b = '222';
	private $c = '333';

	public function fn1(){
		echo '张三有1:';
	}
	protected function fn2(){
		echo '张三有2:';
	}
	private function fn3(){
		echo '张三有3:';
	}
}

//子类
class obj2 extends obj
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
	//返回父类的方法
	public function getFn1(){
		return $this->fn1();
	}

	public function getFn2(){
		return $this->fn2();
	}

	public function getFn3(){
		return $this->fn3();
	}
}
$zhangsan = new obj2;
echo $zhangsan->getFn1();
echo $zhangsan->getFn2();
//echo $zhangsan->getFn3(); private不可再子类中访问



///关于  :: 以及引用父类的方法
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}
class OtherClass extends MyClass
{
    // 覆盖了父类的定义
    public function myFunc()
    {
        // 但还是可以调用父类中被覆盖的方法
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();