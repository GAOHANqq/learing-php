<?php

//二维数组的调用
$arr = [
		0 => 1,
		1 => 'hello',
		2 =>[4,5,6]
		];
print_r($arr);
echo $arr[1];
echo '<br>';

print_r($arr[2][1]);
echo '<br>';

//数组的遍历
	// 1.for循环
$arr = ['中','华','人','民'];
for($i=0;$i<4;$i++){
	echo $i,'~',$arr[$i],'<br>';
}

	// 2.foreach循环
$arr = ['name' => '张三',
	'sex' => '男',
	'Age' => 20,
	'Class' => '高三',
	'HOME' => '北京'];
foreach($arr as $key => $value){
	echo "$key : $value <br>";
}