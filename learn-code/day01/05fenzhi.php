<?php
//1.if单支
$a = 1;
if($a<2){
	echo '你好','<br>';
}
//2.if--else多支
$b = 5;
if($b>10){
	echo '比十小';
}
else if($b<3){
	echo '比三小';
}
else{
	echo '3之后';
}
echo '<br>';
//3.switch
$m= 4;
switch($m){
	case 1:
		echo '周一';
		break;
	case 2:
		echo '周二';
		break;
	case 3:
		echo '周三';
		break;
	case 4:
		echo '周四';
		break;
	case 5:
		echo '周五';
		break;
	case 6:
		echo '周六';
		break;
	default:
		echo '周日';
}