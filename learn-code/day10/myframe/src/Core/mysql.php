<?php
namespace App\Core;
/*
	单例
*/
class Mysql
{
	private static $instance;

	public function getInstance()
	{
		if(self::$instance){
			return self::$instance;
		} else {
			self::$instance = new self;
			return self::$instance;
		}
	}

	private function __construct()
	{	
		$host = 'localhost';
		$port = 3366;
		$dbname = 'student';
		$user = 'root';
		$password = '';
		$charset= 'utf8';


		$dsn = 'mysql:host='.$database['host'].';port='.$database['port'].';dbname='.$database['dbname'];

		try{
			$this->$connect = new PDO($dsn ,'root',''); 
			$this->$connect->exec('set names utf8');
		} catch (PDOExpection $e) {
			exit('数据库连接失败'.$e->getMessage());
		}
		
	}

	public function getConnect()
	{
		return $this->$connect;
	}

	private function __clone()
	{
	
	}
}
