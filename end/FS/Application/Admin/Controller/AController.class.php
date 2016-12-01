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
				$this->success("登录成功！",U("Index/index"));
				
			}else{
				$this->error("用户名或密码不正确",'',20);//第二个参数不写，返回上一页
			}
		}
		else{
			$this->display();
		}
	}
	
	public function logout(){
		if(!session(null)){
			$this->success("退出系统成功",U("A/login"));
		}else{
			$this->error("退出系统失败",U("Index/index"));
		}
		
	}
}