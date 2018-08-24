<?php
namespace App\Controller;

user App\Model\User as Usermodel;

class User
{
	public function info()
	{
		$userModel = new UserModel;
		$user = $UserModel->getUserInfo(1);

		include APP_PATH . '/views/user/info.php';
	}

	public function add()
	{
		echo '添加用户';
	}
}