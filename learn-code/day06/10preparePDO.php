<?php
//PDO 查询数据库
try{
	$conn = new PDO("mysql:host=localhost;dbname=student",'root','');
	$conn->exec('set names utf8');
	
	$sql = "select * from student where Ssex = ?";
	$stmt = $conn->prepare($sql);
	//print_r($stmt);
	$stmt->bindParam(1,$sex);
	$sex = '男';
	$stmt->execute();

	$res = $stmt->fetchAll();
	print_r($res);
}
catch(PODException $e){
	echo "操作失败",$e->getMessage();
}	