<?php
	if(!defined('CAN_ACCESS')){
		exit;
	}
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
				<th>性别</th>
				<th>班级</th>
			</tr>
			<?php foreach($data as $key => $value): ?>
			<tr>
				<td><?php echo $value['Sname']; ?></td>
				<td><?php echo $value['Ssex']; ?></td>
				<td><?php echo $value['Class']; ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>