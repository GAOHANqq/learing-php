<?php

//1.用while和for计算1到100之和
$sum = 0;
$a = 0;
while($a<100){
	$a++;
	$sum += $a;
}
echo  'while循环:' . $sum . '<br>';

$sum1 = 0;
for($b=1;$b<=100;$b++){ 
	$sum1 += $b;
}
echo 'for循环:' . $sum1 . '<br>';

//2.100000元 >50000交5%,<=50000交5000,求可经过多少次?
$money = 100000;
$count = 0;
while($money>5000){
	if($money>50000){
		$money -= $money * 0.05;
	}
	else{
		$money = $money - 5000;
	}
	$count++;
}
echo '可以经过路口',$count,'次','<br>';

//3.打印1~100,遇到3的倍数则打印fizz,遇到5的倍数用buzz,都是则用abcde
for($a=1;$a<=100;$a++){
	if($a%3 == 0){
		if($a%5 == 0){
			echo 'abcde' . '<br>';
		}
		echo 'fizz' . '<br>';
	}
	else if($a%5 == 0){
		echo 'buzz' . '<br>';
	}
	else{
		echo $a . '<br>';
	}
}
//4.计算1~500以内不含数字4的自然数的个数.

	//  个位(0<x<10)  十位(0<num/10<10) 百位(0<num/100<10) count
	//  !=4
	//num = num/100 . num/10 . 个位数
	//$count = 0;
	//325 百位:x = 325/100 = 3
	//	十位:y = (325-100x)/10 = 2
	//	个位:z = (325-100x-10y) = 5
$sum = 0;
for($i=1;$i<=500;$i++){
	$bai = floor($i/100);
	$shi = floor(($i-$bai*100)/10);
	$ge = $i-$bai*100-$shi*10;
	
	if($bai != 4 && $shi !=4 && $ge != 4){
		$sum++;
	}
}	
echo $sum . '<br>';


//99乘法表
	//$i被乘数  $j乘数
for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
		echo $i .'*'. $j .'='. $i*$j . '&nbsp;&nbsp;&nbsp;';
	}
	echo '<br>';
}

//星号金字塔
$row = 6;
for($i=1;$i<=$row;$i++){
	for($j=1;$j<=$row-$i;$j++){
		echo '&nbsp;';
	}
	for($x=1;$x<=2*$i-1;$x++){
		echo '*';
	}
	echo '<br>';
}