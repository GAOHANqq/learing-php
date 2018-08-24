<?php
echo "hello" . "\n";
print_r($_GET);

echo '$argv------------';
var_dump($argv);

echo '$argc------------';
var_dump($argc);

/*	在命令行操作,在网页打开会出错
	php脚本变量 $argv $argc

	$argv — 传递给脚本的参数数组
	$argc — 传递给脚本的参数数目

	$argv[0]是脚本名称,$argv[1],$argv[2]...是脚本传过来的参数
	$argc就是 $argv的元素的个数
*/