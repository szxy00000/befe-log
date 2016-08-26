<?php 
	$mysql_server_name='127.0.0.1:3306'; //改成自己的mysql数据库服务器
	 
	$mysql_username='root'; //改成自己的mysql数据库用户名
	 
	$mysql_password='123456'; //改成自己的mysql数据库密码
	 
	$mysql_database='befe-log'; //改成自己的mysql数据库名

	$conn=mysql_connect($mysql_server_name, $mysql_username, $mysql_password) or die('errors'); //连接数据库
	 
	mysql_query("set names 'utf8'"); //数据库输出编码

	mysql_select_db($mysql_database);

	$sql = "SELECT * FROM logs;";
	 
	$result = mysql_query($sql);

	while ($one = mysql_fetch_array($result)){ //返回查询结果到数组
		$user = $one["User-Agent"]; //将数据从数组取出
		$refer = $one["Referer"];
		$error = $one["error"];
		echo "$user&nbsp;&nbsp;$error&nbsp;&nbsp;&nbsp;&nbsp;$refer<br>";  //输出数据
	}

	mysql_close(); //关闭MySQL连接

?>