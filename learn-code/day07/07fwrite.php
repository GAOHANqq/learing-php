<?php

//写入文件  fwrite

$filePath = './text.txt';

$fh = fopen($filePath,'r+');
$res = fwrite($fh,'HELLO');//r+时,读写方式,在开头写入
print_r($res);//返回写入的字符数

$fh = fopen($filePath,'w');
$res = fwrite($fh,'HELLO');//w时,在开头写入,并将原有文件大小截为0(删除)
print_r($res);

$fh = fopen($filePath,'a');
$res = fwrite($fh,'world');//a时,写入方式，指向文件末尾。
print_r($res);

$fh = fopen($filePath,'a+');
$res = fwrite($fh,'world');//a+时,读写打开，指向文件末尾。不存在则创建
print_r($res);

/*
$fh = fopen($filePath,'x');
$res = fwrite($fh,'world');//x时,打开已有文件会出错,打开不存在的文件时创建文件
var_dump($res);
*/