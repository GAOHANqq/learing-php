<?php
/*
接口  interface
	接口像定义一个标准的类一样，但其中定义所有的方法都是空的
	接口中定义的所有方法都必须是公有，这是接口的特性。 
	1.interface关键词修饰
	2.接口内的方法不能与方法体
	3.不能有成员属性,可以有类常量
	4.接口可继承接口
	5.类可实现接口,必须实现接口类的所有方法,或者定义为抽象类
	6.尽量避免接口中有重名方法
*/
interface Inter1
{	
	const constant = 'hello';
	public function func1();
}

interface Inter2 extends Inter1
{
	
}
//接口继承多个接口
interface Inter3 extends Inter1,inter2
{
	
}
//类实现(implements)多个方法:必须实现接口内的所有方法
class Foo implements Inter1,Inter2
{
	public function func1(){
	
	}
	public function func2(){
	
	}
}


//接口的实现
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

class Template implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
}