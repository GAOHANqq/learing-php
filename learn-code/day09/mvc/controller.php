<?php

//echo '21222';exit;
if(!defined('CAN_ACCESS')){
	exit;
}
//echo '2222222222';
//连接数据库
$date = include 'model.php';
$newdate = [];
foreach ($date as $key => $value){
	$newdate[] = [
		'Sname' => $value['Sname'],
		'Ssex' => $value['Ssex'],
		'Class' => $value['Class'],
	];
}
print_r($newdate);
include 'view.php';