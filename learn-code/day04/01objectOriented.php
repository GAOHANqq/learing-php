<?php
/*
	面向对象
	面向过程

	文章发布的功能?????
		1.表单,数据提交到服务器
		2.验证数据的合法性
		3.连接数据库,存储到数据库
		4.提示成功/失败
		
	拆分小程序为多个小块,控制每个步骤.
*/

class human{
	public $iq = 100;
	public function zhaohu(){
		if($this->iq > 100){
			echo '早上好';
		}
		else{
			echo '晚上好';
		}
	}
}
class car{
	public function zhuang($who){
		$who->iq = rand(80,100);
	}
}

$zhangsan= new human;
$aotuo = new car;
$zhangsan->zhaohu();
$aotuo->zhuang($zhangsan);
echo '被撞了,智商:' . $zhangsan->iq . '<br>';
$zhangsan->zhaohu();