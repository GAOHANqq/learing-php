<?php
$str = file_get_contents('./text2.txt');//函数获取文件全部内容
print_r($str);

$res = file_put_contents('./text2.txt',"Come on everyone\r\n",FILE_APPEND);
var_dump($res);

$res = filesize('./text2.txt');//取得文件的大小，以字节为单位
echo $res . '<br>';


//关于文件时间的获取
date_default_timezone_set('Asia/Shanghai');//设置时间
echo time() . '<br>';//获取当前时间的时间戳

echo date('Y-m-d H:i:s',filemtime('./text2.txt')); //取得文件修改时间
echo '<br>';

echo date('Y-m-d H:i:s',filectime('./text2.txt'));//取文件inode修改时间
echo '<br>';

echo date('Y-m-d H:i:s',fileatime('./text2.txt'));//取得上次访问时间
echo '<br>';


var_dump(file_exists('./text2.txt'));
var_dump(file_exists('./text3.txt'));
	//检查文件是否存在，存在返回true否则返回false。
var_dump(is_readable('./text2.txt'));
	//判断文件是否可读，如果文件存在并且可读，存在返回true否则返回false
var_dump(is_writable('./text2.txt'));
	//判断文件是否可写，如果文件存在并且可写，存在返回true否则返回false




//mkdir('./demo');//创建目录
echo basename('./text3.txt').PHP_EOL;//返回路径中的文件名部分
echo dirname('./text3.txt');//返回路径中的目录部分
print_r(pathinfo('./text3.txt'));//返回一个关联数组包含有 path 的信息