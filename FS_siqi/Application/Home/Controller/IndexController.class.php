<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $this->show();
    }
    public function login(){
    	$this->show();
    }
    public function addStu(){
    	if(!IS_POST){
			exit("bad request");
		}
		
		$studentModel = D("student");
		if(!$studentModel->create()){
			$this->error($studentModel->getError());
		}
		if($studentModel->add()){
			$this->success("注册成功",U("index"));
		}else{
			$this->error("注册失败");
		}
    }
    public function resStu(){
    	$this->display();
    }

    public function addTeacher(){
    	$this->display();
    }
    public function addTeaTel(){
    	if(!IS_POST){
			exit("bad request");
		}
		cookie("realname",I("post.realname"));
		cookie("tel",I("post.tel"));
		cookie("password",I("post.password"));
		$this->redirect("index/resTeacherSelect");
    }
    public function resTeacherSelect(){
    	$this->display();
    }
    public function addTeacherSelect(){
    	if(!IS_POST){
			exit("bad request");
		}
		
		$teacherModel = D("teacher");

		$data['realname']=cookie('realname');
		$data['tel']=cookie('tel');
		$data['password']=cookie('password');
		$data['grade']=I("post.grade");
		$data['subject']=I("post.subject");
		$data['city']=I("post.city");
		$data['township']=I("post.township");
		$data['school']=I("post.school");
		$data['class']=I("post.class");
		if(!$teacherModel->create($data)){
			$this->error($teacherModel->getError());
		}
		if($teacherModel->add($data)){
			$this->success("注册成功",U("index"));
		}else{
			$this->error("注册失败");
		}
    }
    
}