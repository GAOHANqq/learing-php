<?php

//单例模式
	//全局只有一个对象  比如购物车
	//整个系统共用一个,不允许外部实例化
	//类内部实例,实例全局只能有一个


//如果一个类被声明为 final，则不能被继承。
final class Cart
{
	public $rand;

	private static $instance = null;
	
	protected function __construct(){
		$this->rand = rand(100,999);
	}

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new self;
		}
			return new self;
	}
	//在类外部无法实例化
	private function __clone(){
	}
}

$cart1 = Cart::getInstance();
print_r($cart1);
$cart2 = Cart::getInstance();
print_r($cart2);
$cart3 = Cart::getInstance();
print_r($cart3);

if($cart1 === $cart2){
	echo '相等';
}
//$cart4 = clone $cart1;
//if($cart1 === $cart4){
//	echo '相等';
//}