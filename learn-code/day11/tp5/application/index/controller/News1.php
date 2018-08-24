<?php
namespace app\index\controller;

use  app\index\model\User;

class News1 
{	
	public function getsql()
	{
		//$res = \Db::table('student')->where('Sid',1)->select();

		//$res = student::where('id','=',2)->select();
		$res = User::get(2);
		echo $res->getLastSql(),"<br>";
		print_r($res);
	}
}
