<?php
//Mysql 预处理  插入数据库

$conn = new mysqli('localhost','root','','student');
if($conn->connect_error){
	echo '连接失败';exit;
}

$conn->query('set names utf8');
$sql = "insert into student(Sname,Sbirthday,Ssex,Class,Sid) values(?,?,?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param('ssssi',$name,$birthday,$sex,$class,$id);
$name = '刘备';
$birthday = "1992-12-02";
$sex = '男';
$class = '五班';
$id = null;
$stmt->execute();

$name = '张飞';
$birthday = "1992-12-02";
$sex = '女';
$class = '五班';
$id = null;
$stmt->execute();
