<?php
 
if(isset($_POST["username"])){
	echo "输入的用户名为:" . $_POST["username"] . "<br>";
}
if(isset($_POST["products"])){
	if (is_array($_POST["products"]) && !empty($_POST["products"])){
		echo "选择的科目为：" . "<br>";
		foreach ($_POST["products"] as $value) {
			echo  "$value <br />";
		}
		echo "选择的个数为：" . count($_POST["products"]) . "<br>";
	}
} 
if (isset($_POST["message"])){
	echo "输入的消息为：" . $_POST["message"] . "<br>";
}

//将一个字符串写入文件
echo file_put_contents("test.txt","Hello World. Testing!");
