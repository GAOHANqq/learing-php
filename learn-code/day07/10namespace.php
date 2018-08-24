<?php
/*
	命名空间:是一种封装事物的方法
		../1/1.txt
		../2/1.txt

		1,解决php内部  类/函数/常量 的重名冲突问题
		2,将标识符用一个别名,提高代码可读性
			namespace	放在文件的最上部
		3,定义多个命名空间,用{}包起来


		非限定名称		new Cat
		限定名称		new Foo\Cat
		完全限定名称	new \Foo\Bar\Cat
		类似于相对路径和绝对路径
*/
namespace name1\sub{
	const CONNECT_OK = 1;
	function foo(){}
	class Human
	{
	}
}


namespace name2{
	const CONNECT_OK = 2;
	function foo(){}
	class Human
	{
	}
}
