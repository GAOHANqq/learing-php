<?php
/*
变量的命名
	[0-9][a-z][A-Z]
	不能以数字开头
*/
$a = 12;

echo $a;
echo'<br>';



/*
	变量的赋值方式
		1.传值赋值
*/
$a = 16;
$b = 20;
echo $a. '~' .$b;
echo'<br>';

echo $a = $b;
echo'<br>';
	//2.引用赋值
	//3.引用计数

$x=5; 
$y=6; 
$z=$x+$y; 
echo $z;
echo'<br>';


//global
$x=5; 
$y=10; 

function myTest() 
{	
    global $x,$y; 
    $y=$x+$y; 
	
} 

myTest(); 
echo $y;
echo'<br>';
//-------------------------------------------------
$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
echo'<br>';
echo'----------------------------';





//strlen() 函数返回字符串的长度（字符数）
echo strlen("Hello world!"); 
echo '<br>';
//strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
	//该函数会返回第一个匹配的字符位置。未找到匹配，返回 FALSE
echo strpos("Hello world!","world"); 
echo '<br>';


$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
} 
echo '<br>';

//count() 函数用于返回数组的长度（元素的数量）：

//遍历并打印关联数组中的所有值，您可以使用 foreach 循环
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
 
	foreach($age as $x=>$x_value)
	{
		echo "Key=" . $x . ", Value=" . $x_value;
		echo "<br>";
	}

//------------------------------------------------
$a = 3;
$b = 4;
$b = $a;
echo $a.'~'.$b;
echo '<br>';


/*
$name=array("Tony","Mary","Jack");
$arrLength=count($name);
for($x=0;$x<arrLength;$x++){
	echo $name[$x];
	echo '<br>';
}
*/










?>