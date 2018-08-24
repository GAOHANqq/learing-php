<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
	//初始化方法
	protected function initialize()
    {

    }

	protected $pk = 'Sid';
	protected $table = 'student';

	// public fucntion list()
	// {
	// 	return $this->fetch();

	// }
}