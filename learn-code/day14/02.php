<?php
/*
	文件的上传

	//检查后缀
	//检查文件大小
	//移动文件  move_uploaded_file();
*/
print_r($_POST);
print_r($_FILES);

$fileDate = $_FILES['file'];
$dist = __DIR__ . '/uploads/01.jpg';
$res = move_uploaded_file($fileDate['tmp_name'],$dist);
if ($res) {
	echo "上传成功";
} else {
	echo "上传失败";
}