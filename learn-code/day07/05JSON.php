<?php

/*
	js中:
	var lat = [1,2,3,4];
	var obj = {id:1,name:'张三'};
	
	php中:
	json_encode(编码),json_decode(解码)

	索引数组转数组,关联数组转对象(反过来也一样)
	对象转json时,只转义public权限的,且成员函数不会转义
*/

$data = [
	['id' => 1,'name' => '张三','age' => '18','sex' => '男'],
	['id' => 2,'name' => '李四','age' => '15','sex' => '男'],
];

$json = json_encode($data);
var_dump($json);

$json = json_encode($data,JSON_UNESCAPED_UNICODE);
var_dump($json);

$arrStr = '[
	{"id":1,"name":"张三","age":"18","sex":"男"},
	{"id":2,"name":"李四","age":"15","sex":"男"}
]';
$arr = json_decode($arrStr);//转为对象
print_r($arr);
$arr = json_decode($arrStr,true);//转为数组:有true为对象  默认为数组
print_r($arr);

class Human
{
	public $name = '张三';
	public $age = 18;
	protected $sex = '男';
	private $class = '二班';

	public function eat(){
		echo "我在吃";
	}
}

$obj = new Human;
print_r($obj);
echo json_encode($obj);