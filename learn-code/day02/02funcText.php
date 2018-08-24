<?php
function foo(){
	$row = 6;
	if($row<=6){
		for($i=1;$i<=$row;$i++){//行数
			for($j=1;$j<=$row-$i;$j++){//空格
				echo '&nbsp;';
			}
			for($x=1;$x<=2*$i-1;$x++){
				echo '*';
			}
			echo '<br>';
		}
	}
	else{
		echo 'hello world!';
	}
}
foo();

