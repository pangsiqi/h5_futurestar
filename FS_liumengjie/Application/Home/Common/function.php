<?php 

// function getValue($postValue){
	
// 		$postValue = array_filter($postValue);
// 		var_dump($postValue);
// 		return $postValue;
// }
function connectDB(){
	define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PWD','');//密码
    define('DB_NAME','teenedu');

    //连接数据库
    $connect = mysql_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败，错误信息：'.mysql_error());

    //选择指定数据库，设置字符集
    mysql_select_db(DB_NAME,$connect) or die('数据表连接错误，错误信息：'.mysql_error());
    mysql_query('SET NAMES UTF8') or die('字符集设置出错'.mysql_error());
}
    
function isTeaLogin(){
	connectDB();
	$tel = $_SESSION['tel'];
	$stuQuery = "SELECT * FROM teacher WHERE tel=$tel";
	$result = mysql_query($stuQuery) or die('bad request<a href="/FS/index.php/Home">首页</a>');

	if(!mysql_fetch_assoc($result)){
		return false;
	}
	return true;
}
function isStuLogin(){
	connectDB();
	$tel = $_SESSION['tel'];
    $stuQuery = "SELECT * FROM student WHERE tel=$tel";
    $result = mysql_query($stuQuery) or die('bad request<a href="/FS/index.php/Home">首页</a>');

    if(!mysql_fetch_array($result)){
		return false;
	}
	return true;
}



 ?>