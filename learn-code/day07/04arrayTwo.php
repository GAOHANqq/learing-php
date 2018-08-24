<?php

$arr = [
	['id' => 1,'name' => '张一','age' => '18','sex' => '男'],
	['id' => 2,'name' => '张二','age' => '18','sex' => '男'],
	['id' => 3,'name' => '张三','age' => '18','sex' => '男'],
	['id' => 4,'name' => '张四','age' => '18','sex' => '男'],
	['id' => 5,'name' => '张五','age' => '18','sex' => '男'],
];

//print_r($arr);

foreach($arr as $key => $value){
	print_r($key);
	echo "~";
	print_r($value['name']);
	echo "\r\n";

}

echo "<br>-------------------------------------------------<br>\r\n";

//数组1改变到数组2
$arr4 = [];
foreach($arr as $key => $value){
	//print_r($value['id']);
	$arr4[$value['id']] = $value;
}
print_r($arr4);



$arr2 = [
	1=>['id' => 1,'name' => '张三','age' => '18','sex' => '男'],
	2=>['id' => 2,'name' => '李四','age' => '15','sex' => '男'],
	3=>['id' => 3,'name' => '王五','age' => '35','sex' => '男'],
	4=>['id' => 4,'name' => '赵六','age' => '25','sex' => '男'],
	5=>['id' => 5,'name' => '韩梅梅','age' => '45','sex' => '女'],
];

echo "<br>-------------------------------------------------<br>";
//数组2转到数组3
$arr3 = [];
foreach($arr2 as $key => $value){
	$arr3[$value['id']] = $value['name'];
}
print_r($arr3);

//print_r(array_column($arr,'id'));
