<?php
namespace Admin\Controller;
use Think\Controller;
class AController extends Controller {
    public function login(){
		if(IS_POST){
			$adminModel = M('adminuser');
			$condition = array(
					"username" => I("post.username"),
					"password" => I("post.password")
				);
			$result = $adminModel->where($condition)->count();//得到数据条数
			if($result > 0){
				session("username",I("post.username"));//session赋值
				$this->redirect("Index/index");
				
			}else{
				$this->redirect("A/login");
			}
		}
		else{
			$this->display();
		}
	}
	
	public function logout(){
		if(!session(null)){
			$this->redirect("A/login");
		}
	}
}