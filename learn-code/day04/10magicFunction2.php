<?php

class Foo
{
	public $bar;

	public function __construct($bar){
		$this->bar = $bar;
	}

	public function __clone(){
		echo '我被克隆了<br>';
	}
}
$foo1 = new Foo(1);

$foo3 = $foo1;//1
$foo3->bar = 3;//3

echo $foo3->bar . '<br>';//3
echo $foo1->bar . '<br>';//3

//克隆 clone

$foo4 = clone $foo1;
$foo4->bar = 4;
echo $foo4->bar . '<br>';
echo $foo1->bar . '<br>';

/*
if($foo3 === $foo4){
	echo '相等';
}
else{
	echo '不相等';
}
*/
