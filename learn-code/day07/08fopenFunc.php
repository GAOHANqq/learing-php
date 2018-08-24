<?php
$str = file_get_contents('./text.txt');//函数获取文件全部内容
print_r($str);

$res = file_put_contents('./text.txt',"Hello world\r\n");
	//函数写入文件内容
$res = file_put_contents('./text.txt',"Come on everyone",FILE_APPEND);
	//写入多行需要加FILE_APPEND(追加模式)
var_dump($res);



