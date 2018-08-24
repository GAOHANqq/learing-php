<?php


PSR 四条规范

自动加载  spl_autoload_register

定义一个函数,当实例化一个类时,按照一定的规则包含类文件

匿名函数(闭包函数)
$func1 = function($arg) use ($gloabl){
}

composer  php依赖管理

composer.json  --------->composer install

autoload.php  可以自动加载安装包