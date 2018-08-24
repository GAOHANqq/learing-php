<?php
class human
{	//成员变量
	public $name;
	protected $money;
	//构造函数
	public function __construct($name,$money){
		$this->name = $name;
		$this->money = $money;
	}
	
	public function getMoney(){
		return $this->money;
	}
	//借入钱
	public function borrow($money){
		$this->money += $money;
	}
	//借出钱
	public function send($money){
		if($money>3000){
			echo '借钱太多,不给<br>';
			return 0;
		}else{
			$this->money -= $money;
			return $money;
		}
	}
}

//实例化
$zhangsan = new human('张三',10000);
$lisi = new human('李四',8000);

echo '张三有' . $zhangsan->getMoney() . '<br>';
echo '李四有' . $lisi->getMoney() . '<br>';

//李四问张三借钱
$count = rand(2000,4000);
echo '李四问张三借钱' . $count .'后<br>';
$lisi->borrow($zhangsan->send($count));
echo '张三有' . $zhangsan->getMoney() . '<br>';
echo '李四有' . $lisi->getMoney() . '<br>';