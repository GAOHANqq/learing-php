<?php
//PDO  update数据库
try{
	$conn = new PDO("mysql:host=localhost;dbname=student",'root','');
	$conn->exec('set names utf8');
	
	$sql = "update student set Sname=:Sname where Sid=:Sid";
	$stmt = $conn->prepare($sql);

	$stmt->execute([
		':Sname' => '关羽',
		':Sid' => '23',
	]);
}
catch(PODException $e){
	echo "操作失败",$e->getMessage();
}	