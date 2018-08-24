<?php
//面向过程

$conn = mysqli_connect('localhost','root','','student');
if(!$conn){
	echo '连接失败',mysql_connect_error();exit;
}
else{
	echo "连接成功";
}

mysqli_query($conn,'set names utf8');

$sql = "insert into student(Sname,Sbirthday,Ssex,Class,Sid) values('李四','1996-04-25','男','三班',null)";
if(mysqli_query($conn,$sql)){
	echo $conn->insert_id;
	echo "插入成功";
}
else{
	echo "插入失败";
}



