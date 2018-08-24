<?php
//Route::rule('new','index/News/info','get|post');

Route::get('new$','index/News/read');	//路由到模块/控制器/操作

Route::rule('new','index/News/info','get');
Route::rule('hi','index/Demo/hi','get');

Route::rule('getsql','index/News1/getsql','get');

//动态路由
//动态参数+规则

Route::get('new/:id/add','index/News/add')
	// ->pattern(['id' => '\d+']);   //整型
	->pattern(['id' => '\w+']);		//字符串,字母,下划线

//直接传方法
Route::get('thinks',function() {
	return 'hello  think';
});


Route::rule('getsql','index/News1/getsql','get');


Route::get('say','index/Demo/say')->name('template_extend');