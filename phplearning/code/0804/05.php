<?php
/*
学号:234， $stu1_num=234;
姓名:李三， $stu1_name='李三';
身高:174， $stu1_height=174;
年级:高二， $stu1_grade= '高二';
家乡:南京， $stu1_address= '南京';
*/

$stu = '234|李三|174|高二|南京';

/*
数组
一组数

数组的特点
数组是用来管理多个变量
每个单元都有2个基本的信息
标签(key,index), 内容(value)
每个key都是唯一的, value用来存储值
*/

/*
数组的声明
js
var lst = [1,2,3];
*/

$arr = [
	'学号' => 234,
	'姓名' => '张三',
	'身高' => 174,
	'年级' => '高二',
	'家乡' => '南京'
];
print_r($arr);
echo "\r\n";

$arr = array(
	'学号' => 234,
	'姓名' => '张三',
	'身高' => 174,
	'年级' => '高二',
	'家乡' => '南京'
);
print_r($arr);
echo "\r\n";

$arr2['学号'] = 234;
$arr2['姓名'] = '张三';
$arr2[0] = '174';
print_r($arr2);
echo "\r\n";

/*
数组的键可以是字符串,也可以是整型
*/




