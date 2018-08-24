<?php
//查询数据

//面向对象
$sql = "select Sid,Sname,Class from student";

$conn = new mysqli('localhost','root','','student');
if($conn->connect_error){
	echo '连接失败';exit;
}

$conn->query('set names utf8');
$result = $conn->query($sql);

if($result->num_rows){
	//$allUsers = $result->fetch_all();
	//print_r($allUsers);
	while($row = mysqli_fetch_array($result)){
		echo $row['Sid'] . '~' . $row['Sname'] . '~' . $row['Class'] . '<br>';
	}
}
else{
	echo '没有数据';
}

echo '<br>----------------------------------------------<br>';

//面向过程

$conn = mysqli_connect('localhost','root','','student');
if(!$conn){
	echo '连接失败';exit;
}
mysqli_query($conn,'set names utf8');

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)){
	//$allUsers = $result->fetch_all();
	//print_r($allUsers);
	while($row = mysqli_fetch_assoc($result)){
		echo $row['Sid'] . '~' . $row['Sname'] . '~' . $row['Class'] . '<br>';
	}
}
else{
	echo '没有数据';
}


echo '<br>----------------------------------------------<br>';
//查询 PDO

try{
	$conn = new PDO("mysql:host=localhost;dbname=student",'root','');
	$conn->exec('set names utf8');

	$res = $conn->query($sql);
	//var_dump($res);exit;
	if($res->rowCount()){

		while($row = $res->fetch()){
			echo $row['Sid'] . '~' . $row['Sname'] . '~' . $row['Class'] . '<br>';
		}
	} else{
		echo '没有数据';
	}
}
catch(PODException $e){
	echo "操作失败",$e->getMessage();
}
