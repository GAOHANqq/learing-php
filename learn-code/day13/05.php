<?php
session_start();

//session的销毁  unset  destroy
//session_unset();删除session内部的变量内容,不删除文件
//session_destroy();删除文件
//print_r($_SESSION);

if(isset($_SESSION['name']) && $_SESSION['name'] = 'lisi'){
	echo '已登录';
}