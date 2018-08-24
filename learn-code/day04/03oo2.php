<?php
//对象的特点:封装,继承,多态

	//封装:开放某些接口,来操作受保护的内部属性或方法;
		//修饰符:
			//public公有
			//protected受保护 :可以操作同一类实例化的对象里面受保护的值
			//private私有

class human
{	
	public $name;
	protected $money;

	public function __construct($name,$money){
		$this->name = $name;
		$this->money = $money;
	}
	//借钱的方法
	public function borrow($who,$money){
		$who->money -= $money;
		$this->money += $money;
	}

}
$zhangsan = new human('张三',10000);
$lisi = new human('李四',8000);

//echo $zhangsan->name . '有:' . $zhangsan->money . '<br>';
//echo $lisi->name . '有:' . $lisi->money . '<br>';

echo '张三问李四借了5000元<br>';

$lisi->borrow($zhangsan,5000);


//$zhangsan->money -= 5000;
//$lisi->money += 5000;

//echo $zhangsan->name . '有:' . $zhangsan->money . '<br>';
//echo $lisi->name . '有:' . $lisi->money . '<br>';