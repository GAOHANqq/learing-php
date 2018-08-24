<?php
$arr = ['name' => '张三',
		'sex' => '男',
		'Age' => 20,
		'Class' => '高三',
		'HOME' => '北京'];
print_r($arr);
echo '<br>';

	//array_key_exists 检查数组里是否有指定的键名或索引
var_dump(array_key_exists('Class',$arr));

	//count	计算数组中的单元数目，或对象中的属性个数
var_dump(count($arr));

	//array_change_key_case — 将数组中的所有键名修改为全大写或小写
	//CASE_UPPER 或 CASE_LOWER
var_dump(array_change_key_case($arr,CASE_LOWER));

	//current — 返回数组中的当前单元
var_dump(current($arr)); 
//echo current($arr); 
//next($arr);
//echo current($arr); 

for(;current($arr);next($arr)){
	echo key($arr),'~',current($arr),'<br>';
}
echo '再遍历一次-------------','<br>';

//reset — 将数组的内部指针指向第一个单元
reset($arr);
for(;current($arr);next($arr)){
	echo key($arr),'~',current($arr),'<br>';
}

reset($arr);
echo '-------------','<br>';
//走两步退一步
for($flag = true;current($arr);){
	echo key($arr),'~',current($arr),'<br>';
	if($flag){
		next($arr);
		next($arr);
		$flag = false;
	}
	else{
		prev($arr);
		$flag = true;
	}
}

reset($arr);
//array_values 返回数组中所有的值 
print_r(array_values($arr));
echo '<br>';

//each list配合循环数组

reset($arr);
//each — 返回数组中当前的键／值对并将数组指针向前移动一步
	//0,key是索引,1和value是值

print_r(each($arr));
echo '<br>';
print_r(each($arr));
echo '<br>';

reset($arr);
while(true){
	$tmp = each($arr);
	if($tmp){
		echo $tmp[0],'~',$tmp[1],'<br>';
	}
	else{
		break;
	}
}