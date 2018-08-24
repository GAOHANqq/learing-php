<?php

//update数据

//PDO
try{
	$conn = new PDO("mysql:host=localhost;dbname=student",'root','');
	$conn->exec('set names utf8');
	
	$sql = "update student set Sname = '王飞' where Sid = 18";
	$num = $conn->exec($sql);

	echo '修改成功,修改了' . $num . '条数据';
	
}
catch(PODException $e){
	echo "操作失败",$e->getMessage();
}