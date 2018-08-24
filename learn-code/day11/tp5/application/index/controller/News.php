<?php
namespace app\index\controller;

use think\Controller;//继承基类

class News extends Controller
{	
	//控制器初始化
	protected function initialize()
    {
        echo 'init<br/>';
    }

	public function read()
	{
		return 'read,大家';
	}

	public function info()
	{
		return 'info,大家';
	}

	public function add($id)
	{
		return $id;
	}

	// public function json()
 //    {
 //    	// 输出JSON
 //        return json($data);
 //    }
    
 //    public function read()
 //    {
 //    	// 渲染默认模板输出
 //        return view();
 //    }

}
