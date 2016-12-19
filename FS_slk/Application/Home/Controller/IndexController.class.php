<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $this->show();
    }
    public function login(){
    	if(IS_POST){
			$condition = array(
					"tel" => I("post.tel"),
					"password" => I("post.password")
				);
			session("tel",I("post.tel"));
			session("password",I("post.password"));
			$teacherModel = M('teacher');
			$tearesult = $teacherModel->where($condition)->count();//得到数据条数
			if($tearesult > 0){
				session("tel",I("post.tel"));//session赋值
				$this->redirect("teacher/index");
			}else{
				$this->redirect("index/stulogin");
			}
		}
		else{
			$this->display();
		}
    }
    public function stulogin(){
    	$studentModel = M('student');
    	$condition = array(
					"tel" => session("tel"),
					"password" => session("password")
				);
		$stuResult = $studentModel->where($condition)->select();//得到数据条数
		if(count($stuResult) > 0){
			cookie('teatel',$stuResult[0]['teatel']);
			session("tel",I("post.tel"));//session赋值
			$this->redirect("student/index");
			// $this->success("dd",U("student/index"));
		}else{
			$this->error("用户名或密码不正确",'',1);//第二个参数不写，返回上一页
		}
    }

    public function addStu(){
    	if(!IS_POST){
			exit("bad request");
		}
		
		$studentModel = D("student");

		//通过输入的教师手机号，获取教师的相关信息
		$teacherModel = D("teacher");
		cookie("teatel",I("post.teatel"));
		$teatel = cookie("teatel");
		$result = $teacherModel->where("tel='$teatel'")->select();

		$data['sex']=I('post.sex');
		$data['username']=I('post.realname');
		$data['realname']=I('post.realname');
		$data['tel']=I('post.tel');
		$data['password']=I('post.password');
		$data['teatel'] = $result[0]['tel'];
		$data['grade']=$result[0]['grade'];
		$data['school']=$result[0]['school'];
		$data['location']=$result[0]['city'].$result[0]['township'];

		if(!$studentModel->create($data)){
			$this->error($studentModel->getError());
		}
		if($studentModel->add($data)){
			session("tel",I("post.tel"));//session赋值
			$this->redirect("student/index");
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
		session("realname",I("post.realname"));
		session("tel",I("post.tel"));
		session("password",I("post.password"));
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

		$data['realname']=session('realname');
		$data['tel']=session('tel');
		$data['password']=session('password');
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
			$this->redirect("teacher/index");
		}else{
			$this->error("注册失败");
		}
    }
    
}