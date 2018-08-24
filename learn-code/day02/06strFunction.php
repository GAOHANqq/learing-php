<?php
$str = "hello world";
$str1 = "hello everyone";
$str2 = "你好世界";

//strlen-->字符串长度
echo strlen($str),'<br>';
echo strlen($str2),'<br>';
//mb_strlen-->多字节字符串长度(utf-8编码时,中文占3个字节)
echo mb_strlen($str2),'<br>';
 

//strpos-->查找字符串位置
echo strpos($str,"l",3),'<br>';//第一次出现的位置
echo stripos($str,"l"),'<br>';
echo strrpos($str,"l"),'<br>';//最后一次出现的位置

$str3 = 'hello world';
if(false !== strpos($str3,'he')){
	echo '找到','<br>';
}
else{
	echo '啥都没有','<br>';
}
	

//str_replace-->字符串替换
$str = 'hello fuck fuck fuck fuck';
$count = 0;
echo str_replace('fuck','f**k',$str,$count),'<br>';
echo '被替换了',$count,'次','<br>';