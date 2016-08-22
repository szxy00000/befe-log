<?php
	$myfile = fopen("../testfile.txt", "a") or die("Unable to open file!");
	$txt = $_GET['err'];
	fputs($myfile, $txt . '<br>');
	foreach (getallheaders() as $name => $value) {
		if ($name == 'Referer' || $name == 'User-Agent') {
			fputs($myfile, "$name: $value<br>");
			insertData($value, $txt);
		}
	} 
	fclose($myfile);


	function insertData($user, $error) {
		echo $user;
		$mysql_server_name='127.0.0.1:3306'; //改成自己的mysql数据库服务器
		 
		$mysql_username='root'; //改成自己的mysql数据库用户名
		 
		$mysql_password='123456'; //改成自己的mysql数据库密码
		 
		$mysql_database='befe-log'; //改成自己的mysql数据库名

		$conn=mysql_connect($mysql_server_name, $mysql_username, $mysql_password) or die('errors'); //连接数据库
		 
		mysql_query("set names 'utf8'"); //数据库输出编码
		 
		mysql_select_db($mysql_database); //打开数据库
		
		$sql = "INSERT INTO `befe-log`.`logs` (`User-Agent`, `Referer`, `error`) VALUES ('4312asdasdrewd', 'asfas', 'fasdfasdf');";
		 
		mysql_query($sql);
		 
		mysql_close(); //关闭MySQL连接
	}
	
?>