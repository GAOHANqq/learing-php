<?php
/*
	php客户端连接数据库Mysql
	//phpinfo();查看php信息
	//var_dump(PDO::getAvailableDrivers()); // 打印出当前PDO支持的数据库驱动
*/


//连接数据库
echo '----------------------------------------------------------------';
	//mysqli面向对象
	//$conn = new mysqli("localhost", "username", "password", "dbname"); 

$conn = new mysqli("localhost","root","","student");
	if($conn->connect_error){
		echo '连接失败';exit;
	}
print_r($conn->connect_error);
print_r($conn);


/*
echo '----------------------------------------------------------------';

	//mysqli面向过程
	//$conn = mysqli_connect("localhost", "username", "password", "dbname"); 


$conn = mysqli_connect("localhost", "root", "114841","student"); 
	if($conn){
		echo '报错信息' . mysqli_connect_error();exit;
	}
var_dump($conn);

echo '----------------------------------------------------------------';
*/
	//PDO连接
	//$conn = new PDO("mysql:host=localhost;dbname=testdb", "username", "password");

/*

try{
	$dsn = 'mysql:host = localhost;dbname = text';
	$conn = new PDO($dsn,'root','111');
}
catch (PDOException $e){
	echo $e->getMessage();exit;
}

print_r($conn);*/