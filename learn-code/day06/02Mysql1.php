<?php

//连接数据库(面向对象)
$conn = new mysqli("localhost","root","","student");
//检测连接
if($conn->connect_error){
	die('连接失败:' . $conn->connect_error);
}
else{
	echo '连接成功';
}
$conn->query('set names utf8');

	//插入数据 mysqli实现

$sql = "insert into student(Sname,Sbirthday,Ssex,Class,Sid) values('Tom','1990-03-03','man','two',null)";

$sql = "insert into student(Sname,Sbirthday,Ssex,Class) values('Mary','1991-01-01','man','one');";
if($conn->query($sql)){
	echo '插入成功';
}
else{
	echo '插入失败';
}





