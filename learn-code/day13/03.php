<?php
print_r($_COOKIE);
if(isset($_COOKIE['name']) && $_COOKIE['name']=='zhangsan'){
	echo '已登录';
}