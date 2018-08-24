<?php
/*

    分页
    100条 --每页显示15条
	
	第一页:1-15  select * from articles limit 15; 
	第二页:16-30  select * from articles limit 15,15; 
	第三页:31-45  select * from articles limit 30,15; 
	第四页:46-60  select * from articles limit 45,15; 

	第几页?
	$_GET获取

	select count(*) from article
*/
$page = $_GET();

$total = 100;
$pageSize = 15;
$totalPage = ceil($total/$pageSize);

$offset = ($page-1) * $pageSize;
$sql = "select * from articles limit". "$offset"."$pageSize";