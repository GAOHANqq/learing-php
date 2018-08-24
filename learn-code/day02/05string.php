<?php
//字符串定义
	//1.单引号:纯粹的字符,原样输出,速度更快
	//2.双引号:可解析变量
	//3.定界符
$str1 = 'Hello world';
$str2 = "Hello world";
$age = 18;
echo '我的年龄是$age<br>';
echo "我的年龄是$age<br>";

	//定界符 heredoc nowdoc

	/*
	格式:
		$str = <<<定界符
		大段文本
		定界符
	*/

//定界符开始和结束的标识保持一致
	//结束的标识必须顶格写,不可有空格,以分号结尾;
$str = <<<str
	hello world
	hello world
	hello world
str;
echo $str;
echo '<br>';

$str3 = <<<'str'
	hello world
	hello world
	hello world
str;
echo $str3,'<br>';

//转义的使用

$strt1 = 'hello \'world\'';
$strt2 = "hello 'world'";
$strt3 = "h \$ e \tl \r l \n o 'wo \\ rl \v d'";//转义字符
echo $strt1,'<br>';
echo $strt2,'<br>';
echo $strt3,'<br>';


