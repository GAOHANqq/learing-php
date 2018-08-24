<?php
//赋值运算符
$a = 'hello';
$b = 123;
//算数运算符 +-*/%-
$a = 10;
$b = 5;
$c1 = $a + $b;
echo $c1,'<br>';
$c2 = $a - $b;
echo $c2,'<br>';
$c3 = $a * $b;
echo $c3,'<br>';
$c4 = $a / $b;
echo $c4,'<br>';
$c5 = $a % $b;
echo $c5,'<br>';
$c6 = -$a;
echo $c6,'<br>';
echo '--------递增运算符------------','<br>';
//递增运算符
$n = 10;
$m = 5;
$p1 = $n++;
echo $p1,$n,'<br>';
$p2 = ++$n;
echo $p2,$n,'<br>';
echo '--------逻辑运算符------------','<br>';
//逻辑运算符 and(&&) or(||) xor !
$a = true;
$b= false;
$c = true;
$d = false;
$res = $a && $b;
var_dump($res);
$res1 = $a || $b;
var_dump($res1);
var_dump(!$a);

$res2 = $a xor $b;
var_dump($res2);
$res3 = $a xor $c;
var_dump($res3);