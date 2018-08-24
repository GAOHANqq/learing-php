<?php
//打开session会话
session_start();
$_SESSION['name'] = 'lisi';
$_SESSION['age'] = 25;
print_r($_SESSION);
echo session_id();