<?php
//会话技术
//cookie的设置
date_default_timezone_set('Asia/Shanghai');

if(!isset($_COOKIE['counter'])){
	$counter = 1;
} else {
	$counter = $_COOKIE['counter'];
}

echo '浏览了'.$counter.'次';

$counter = $counter + 1;
setcookie('counter',$counter,time()+100);
setcookie('name','zhangsan');