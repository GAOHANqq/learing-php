<?php
//四个魔术方法 __call __get __set __clone
	//1.__call	在对象中调用一个不可访问方法时,__call()会被调用
		//参数$agrs是枚举数组

class Foo
{
	public function __call($name,$args){
		$length = count($args);
		if($length < 2){
			echo '1~2<br>';
		}
		else if($args < 5){
			echo '大于5<br>';
		}
		else{
			echo '2~5<br>';
		}
	}
}
$foo = new Foo;
$foo->getCompare(1);
$foo->getCompare(1,2);
$foo->getCompare(1,2,3);
$foo->getCompare(1,2,3,4);
$foo->getCompare(1,2,3,4,5,6);