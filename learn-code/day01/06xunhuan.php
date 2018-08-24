<?php

//1.while

$a = 10;
while ($a>0){
	echo $a,'<br>';
	$a--;
}
echo '<br>','------------','<br>';

//2.do while

$b = 10;
do {
	$b--;
	echo $b . '<br>';
} while($b > 0);

echo '<br>','------------','<br>';
//for

$c = 10;
for($x=0;$x<$c;$x++){
	echo $x . '<br>';
}