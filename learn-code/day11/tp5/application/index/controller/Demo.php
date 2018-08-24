<?php
namespace app\index\controller;

use think\Controller;
use think\Request;

class Demo extends Controller
{
    public function hi(Request $request)
    {
    	echo $url = url('news_info',['id'=>1]);
        //$this->redirect($url);

        $data = 'hello ,ThinkPHP!';
        return response($data,403);
    }

    public function say()
    {  
        $this->assign('name', 'thinkphp');
        return  $this->fetch();
    }
   


  

//跳转  error success
    // public function hi()
    // {
    	
    //     //$this->error('新增失败');
    //    // $this->success('新增成功');
    //    $this->redirect('定向成功');
    // }

}