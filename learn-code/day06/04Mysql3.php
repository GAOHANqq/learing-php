<?php
//插入PDO
try{
	$conn = new PDO("mysql:host=localhost;dbname=student",'root','');

	$conn->exec('set names utf8');
	$sql = "insert into student(Sname,Sbirthday,Ssex,Class,Sid) values('王五','1996-04-25','女','三班',null)";
		//使用exec(),没有结果返回
	$res = $conn->exec($sql);
	echo "插入成功";
}
catch(PODException $e){
	echo "操作失败",$e->getMessage();
}
