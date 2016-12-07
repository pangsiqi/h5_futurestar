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
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';//获取网址链接id
		if($id !== ''){
			$homeworkModel = M("homework");//获取表homework
			$homeworkResult = $homeworkModel->where("subjectid=".$id)->find();//.为连接符
			$this->assign('course',$homeworkResult);//赋值
		}
		

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function classgarden(){
		$homeworkModel = M("homework");//获取表homework
		$homeworkResult = $homeworkModel->where("subjectid=5")->find();//.为连接符
		$this->assign('course',$homeworkResult);//赋值

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function classspace(){
		$classspaceModel =  M("classspace");//获取表classspace
		$classspaceResult = $classspaceModel->where("messageid")->find();
		$this->assign('message',$classspaceResult);//赋值
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
		
			$homeworkModel = M("homework");//获取表homework
			$homeworkResult = $homeworkModel->where("subjectid=4")->find();//.为连接符
			$this->assign('course',$homeworkResult);//赋值
		
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
}



?>