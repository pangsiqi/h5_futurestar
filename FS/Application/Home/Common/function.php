<?php 

// function getValue($postValue){
	
// 		$postValue = array_filter($postValue);
// 		var_dump($postValue);
// 		return $postValue;
// }
function isLogin(){
	if(!isset($_SESSION['tel']) || $_SESSION['tel']==''){
		return false;
	}
	return true;
}
 ?>