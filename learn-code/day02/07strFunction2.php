<?php
//字符串截取	substr
$str = 'hello world';
echo $str,'<br>';
echo substr($str,1,5),'<br>';
echo substr($str,-2),'<br>';
var_dump(substr($str,11));
echo '<br>';

//切割字符串  explode
	//1.
$str = 'hello|world';
echo $str,'<br>';
$arr = explode('|',$str);
print_r($arr);
echo '<br>';



//拼接字符串  implode   将一个一维数组的值转化为字符串
$str1 = implode('#',$arr);
echo $str1,'<br>';

//去掉首尾空格	trim  ltrim  rtrim
$str = '    hello  world     ';
var_dump($str);
$str1 = trim($str);
var_dump($str1);
//去左边
$str2 = ltrim($str);
var_dump($str2);
//去右边
$str3 = rtrim($str);
var_dump($str3);


//获取文件的后缀名 
	//1.数组切割方法
$str = ($_SERVER['PHP_SELF']);
echo $str,"<br>";
$arr = explode('/',$str);
print_r($arr);
echo '<br>';
$str2 = $arr[2];
echo $str2;
echo '<br>';
$arr2 = explode('.',$str2);
print_r($arr2);
echo '<br>';
echo end($arr2);
echo '<br>';

	//2.strrpos 截取最后一次出现的位置
$file = '111.txt.php';
echo substr($file,strrpos($file,'.')+1),'<br>';
	//3.replace  strrchr查找指定字符在字符串中的最后一次出现
echo str_replace('.','',strrchr($file,'.')),'<br>';
	//4.pathinfo 返回文件路径的信息
$path_parts = pathinfo($file);
echo $path_parts['extension'], "<br>";