<?php
//创建长度为10的数组,首项为1 奇数自增;
	//方法1.
$arr = [];
for($i=1;$i<=10;$i++){
	$arr[] = 2*$i - 1;
}
print_r($arr);
echo '<br>';
	//方法2.
$arr = [];
$j = 1;
for($i=1;$i<=10;$i++){
	$arr[] = $j;
	$j += 2;
}
print_r($arr);
echo '<br>';

//求数组中最大值得下标
$arr = [];
for($i=1;$i<=10;$i++){
	$arr[] = rand(1,10);
}
print_r($arr);
echo '<br>';
$max = max($arr);
echo "最大值为:$max \r\n";
echo array_search($max,$arr);
print_r(array_keys($arr));
echo '<br>';


