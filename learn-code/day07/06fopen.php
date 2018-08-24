<?php

$filePath = './text.txt';
$fh = fopen($filePath,'r');
//print_r($fh);

$len = fileSize($filePath);//取得本地文件大小
print_r($len);
$str = fread($fh,3);//读取指定字节长度
print_r($str);
echo '<br>';


//var_dump(feof($fh));// feof用来判断是否到达文件结尾
//$str1 = fread($fh,100);


//读取全部方法一:
$str1 = '';
while(!feof($fh)){
	$str1 .= fread($fh,100);
}
print_r(nl2br($str1));//换行
echo '<br>-------------------------------------<br>';
//读取全部方法二:
$str2 = '';
while (true) {
	$str2 .= fread($fh,100);
	if(feof($fh)){
		break;
	}
}
print_r(nl2br($str2));

echo '<br>-------------------------------------<br>';

//读取全部方法三:

$str3 = '';
while (!feof($fh)){
	$str3 .= fgets($fh);//	fgets — 从文件指针中读取一行
}
print_r(nl2br($str3));




