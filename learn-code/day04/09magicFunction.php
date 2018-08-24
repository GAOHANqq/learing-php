<?php
//计算多边形的周长
	//__call调用未定义的方法

class Foo
{
	public $bar = 'hello';

	public function hi(){
		echo $this->bar;
	}

	public function __call($funcName,$args){
		$len = count($args);
		if($len == 3){
			return $args[0] + $args[1] + $args[2];
		} else if($len == 4){
			return $args[0] + $args[1] + $args[2] + $args[3];
		}else{
			echo '不支持其他形状';
		}
	}
}

$foo = new Foo;
echo $foo->getLong(1,2,3) . '<br>';
echo $foo->getLong(1,2,3,4) . '<br>';
echo $foo->getLong(1,2,3,4,5) . '<br>';

//__get 和 __set 魔术方法
class Fn
{
	public $a = 'aaaa';
	protected $b = 'bbbb';
	private $c = 'cccc';
	
	//getC()
	public function getC(){
		return $this->c;
	}
	//setC()
	public function setC(){
		return $this->c = $value;
	}
	//魔术方法 __get()
	public function __get($name){
		if($name == 'c'){
			return $this->$name;
		}
		else{
			echo '只能访问 c';
		}
	}
	//魔术方法 __set()
	public function __set($name,$value){
		print_r($name);
		echo "<br>";
		print_r($value);
		echo "<br>";
		$this->$name = $value;
	}
}
$fn = new Fn;
$fn->c = 'dddd';

//echo $fn->a;
//echo '<br>';
//echo $fn->b;
//echo '<br>';
//echo $fn->c;
//echo '<br>';