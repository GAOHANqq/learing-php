<?php

/*
	mvc模式

*/

//连接数据库
$data = [
	['name'=>'关羽','age'=>40,'weapon'=>'青龙偃月刀'],
	['name'=>'张飞','age'=>38,'weapon'=>'丈八蛇矛'],
	['name'=>'赵云','age'=>30,'weapon'=>'龙胆亮银枪'],
	['name'=>'马超','age'=>25,'weapon'=>'虎头湛金枪'],
	['name'=>'黄忠','age'=>65,'weapon'=>'凤嘴刀'],
];
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<h1>五虎上将</h1>
		<table border="1">
			<tr>
				<th>姓名</th>
				<th>年龄</th>
				<th>武器</th>
			</tr>
			<?php foreach($data as $key => $value): ?>
			<tr>
				<td><?php echo $value['name']; ?></td>
				<td><?php echo $value['age']; ?></td>
				<td><?php echo $value['weapon']; ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>
