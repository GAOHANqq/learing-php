<?php
//(一)异常的基本使用
function checkNum($number)
{
	if($number>1){
		throw new Exception("Value must be 1 or below");
	}
	return true;
}
		//在 "try" 代码块中触发异常
	try{
		checkNum(2);
		//If the exception is thrown, this text will not be shown
		echo 'If you see this, the number is 1 or below';
		}
		//捕获异常
	catch(Exception $e)
	{
		echo 'Message: ' .$e->getMessage();
	}

echo '<br>-------------------------------------<br>';


	//(二)Exception类
class customException extends Exception
{
	public function errorMessage(){
		//error message
		$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile();
		return $errorMsg;
	}
}

$email = "someone@example...com";

try
 {
	//check if 

	if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
		//throw exception if email is not valid
		throw new customException($email);
	}
}
catch (customException $e){
	//display custom message
	echo $e->errorMessage();
}