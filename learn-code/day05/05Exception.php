<?php
/*
异常处理
	throw 关键字 抛出Exception异常类
	try...catch获取异常

*/

function division($a,$b){
	if($b == 0){
		throw new Exception('除数不能为0');
		//echo '除数不能为';
		//return 0;
	}
	return $a / $b;
}

try{
	echo division(20,0);
} catch(Exception $e){
	print_r($e);
	echo $e->getMessage() . '<br>';
	echo $e->getFile() . '<br>';
	echo $e->getCode() . '<br>';
}





class HttpException extends Exception
{
	protected $httpStatus;//404,500,403
	
	public function __construct($message,$httpStatus){
		$this->message = $message;
		$this->httpStatus = $httpStatus;
	}

	public function getHttpStatus(){
		return $this->httpStatus;
	}
}

try{
	throw new HttpException('页面不存咋在',404);
	throw new Exception('系统异常',10001);
}catch(HttpException $e){
	echo $e->getMessage() . '<br>';
}catch(Exception $e){
	echo $e->getMessage() . '<br>';
}




