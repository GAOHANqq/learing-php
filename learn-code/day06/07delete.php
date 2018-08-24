<?php

//delete数据

//PDO
try{
	$conn = new PDO("mysql:host=localhost;dbname=student",'root','');
	$conn->exec('set names utf8');
	
	$sql = "delete from student where Sid = 15";
	$num = $conn->exec($sql);

	echo '删除成功,删除了' . $num . '条数据';
	
}
catch(PODException $e){
	echo "操作失败",$e->getMessage();
}