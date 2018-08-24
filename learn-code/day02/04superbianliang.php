<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>get post</title>
  <style type="text/css">
	*{
		margin:0;
		padding:0;
	}
	form{
		margin:50px auto;
		width:350px;
		text-align:center;
		border:1px solid red;
	}
	.user{
		border:none;

	}
	.user:focus{
		outline:none;
		border-bottom:1px solid red;
	}

  </style>
 </head>
 <body>
	<form action="" method="post" target="_self">
		账号：<input type="text" name="user" placeholder="请输入用户名" autofocus maxlength="2" autocomplete="off"/><br />
		密码：<input type="password" name="password" /><br />
				<label >男<input type="radio" name="sex" /></label>
				<label>女<input type="radio" name="sex"/></label><br>
		<button type="submit">提交</button>
	</form>
 </body>

<?php
//超全局变量
//$_POST,$_GET,$_REQUEST,$_SERVER
//$COOKIE,$_SESSION,$_ENV,$_FILES,$GLOBALS

//超级全局变量是数组类型的变量
//$_SERVER  服务器端的信息
var_dump($_SERVER);

 //$_ENV
var_dump($_ENV);

//$_POST  $_GET
//$_GEt从地址栏获取 $_POST从表单获取
//$_GEt  从url问号后面的内容获取		?jack&age=15
//$_POST 通过表单提交,获取到相应的键值对
print_r($_GET);
echo '<br>';


//$_POST  $_GET
//区别:
	//$_GET
		//从地址栏传过来,明文传输;
		//传输的内容都是字符串;
		//内容长度限制在2k以内
	//$_POST
		//从表单提交,相对安全;
		//多类型;
		//内容收到服务端的限制 post_max-size=8M
		//文件上传只能用post方式
print_r($_POST);
echo '<br>';

//$_REQUEST获取到的是get和post合起来的值
print_r($_REQUEST);
echo '<br>';

//$GLOBALS
print_r($GLOBALS);
