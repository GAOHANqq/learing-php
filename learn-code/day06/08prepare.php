<?php
//Mysql 预处理
//查询数据库
$conn = new mysqli('localhost','root','','student');
if($conn->connect_error){
	echo '连接失败';exit;
}

$conn->query('set names utf8');

$sql = "select * from student where Ssex = ? and Sname = ?";
$stmt = $conn->prepare($sql);
	//整型i 字符串s
//echo $conn->error;
//var_dump($stmt);die;

$stmt->bind_param('ss',$sex,$name);


$sex = "女";
$name = "王五";
$stmt->execute();


//取出全部结果集
	//方法一
$result = $stmt->get_result();
$rows = $result->fetch_all();
print_r($rows);


/*	//方法二
$stmt->store_result();
if($stmt->num_row){
	$stmt->bind_result($Sid,$Sname);

	$row = [];
	while($stmt->fetch){
		$rows[] = ['Sid'=>$id,'Sname'=>$Sname];
	}
	print_r($rows);
}*/