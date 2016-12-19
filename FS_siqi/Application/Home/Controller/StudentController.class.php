<?php
namespace Home\Controller;
use Think\Controller;
class StudentController extends Controller {
	public function index(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function changeinform(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function chinese(){
		public function chinese($id=''){
 		//获取我的信息
 		$studentModel = M("student");
 		$tel = session('tel');
 		$currentUser = $studentModel->where("tel=".$tel)->select();
 		$this->assign("current",$currentUser[0]);
 
  		$id = isset($_GET['id']) ? intval($_GET['id']) : '';//获取网址链接id
 		$homeworkModel = M("homework");//获取表homework
  		if($id !== ''){
 			$homeworkResult = $homeworkModel->limit("3")->where("subjectid=".$id)->order("homeworkid desc")->select();//.为连接符
  			$homeworkSubject = $homeworkModel->where("subjectid=".$id)->select();
  			$this->assign("subject",$homeworkSubject[0]);
  			$this->assign('courses',$homeworkResult);//赋值
 		}else{
 			$homeworkResult = $homeworkModel->limit("3")->where("subjectid=1")->select();//.为连接符
 			$homeworkSubject = $homeworkModel->where("subjectid=1")->select();
 			$this->assign("subject",$homeworkSubject[0]);
 			$this->assign('courses',$homeworkResult);//赋值
  		}

  
  		layout(false); // 临时关闭当前模板的布局功能
  		$this->display();//加载当前函数的模板文件
	}
	public function classgarden(){
		$homeworkModel = M("homework");//获取表homework

  		$studentModel = M("student");
  		//获取我的信息
  		$tel = session('tel');
  		$currentUser = $studentModel->where("tel=".$tel)->select();
  		$this->assign("current",$currentUser[0]);
  
		$resourceModel = M("resource");//获取表resource
		$resourceResult = $resourceModel->limit("3")->order("id desc")->select();//.为连接符
		$this->assign('resource',$resourceResult);//赋值

  		layout(false); // 临时关闭当前模板的布局功能
  	    $this->display();//加载当前函数的模板文件
	}
	public function classspace(){
		$studentModel = M('student');
		$classspaceModel =  M("classspace");//获取表classspace
		$classspaceResult = $classspaceModel->where("messageid")->find();
		$this->assign('message',$classspaceResult);//赋值
		
		//获取我的信息
		$tel = session('tel');
		$currentUser = $studentModel->where("tel=".$tel)->select();
		$this->assign("current",$currentUser[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function english(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function gift(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function math(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function parentspace(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function personcenter(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function pk(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function studycontent(){
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function walktolisten(){
		
		$studentModel = M("student");
		//获取我的信息
		$tel = session('tel');
		$currentUser = $studentModel->where("tel=".$tel)->select();
		$this->assign("current",$currentUser[0]);

		$homeworkModel = M("homework");//获取表homework
		$homeworkResult = $homeworkModel->where("subjectid=4")->find();//.为连接符
		$this->assign('course',$homeworkResult);//赋值
		
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
}



?>