<?php

try{
	$conn = new PDO("mysql:host=localhost;dbname=student",'root','');
	$conn->exec('set names utf8');

	$sql = 'select Sname,Ssex,Class from student';
	$result = $conn->query($sql);

	if($result->rowCount()){
		return $result->fetchALL();
	/*
		while($row = $result->fetch()){
			echo $row['Sid'] . '~' . $row['Sname'] . '~' . $row['Class'] . '<br>';
		}
	*/
	}
	else {
		echo 'f';exit;
	}
	
} catch(PDOExpection $e){
	echo $e->getMessage();exit;
}
