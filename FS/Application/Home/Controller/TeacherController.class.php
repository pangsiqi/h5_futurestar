<?php
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isTeaLogin()){
			$this->error("请先登录",U("index/login"));
		}
	}
	public function index(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function assignment(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function checkhomework(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function guestbook(){
		if(IS_POST){
			$stuName = I("post.realname");
			if($stuName =="请选择学生"){
				echo "<script>";
				echo "alert('请选择接收消息的学生！')";
				echo "</script>";
			}
			// 获取学生id
			$studentModel = M('student');
			$studentResult = $studentModel->where("realname='$stuName'")->select();
			$stuId = $studentResult[0]['id'];
			// 获取老师与该学生的消息记录
			$messageModel = M('messageBoard');

			$count  = $messageModel->count();    //计算总数
	        $Page   = new \Think\Page($count, 1);
			$messageResult = $messageModel->limit($Page->firstRow. ',' . $Page->listRows)->where("student_id='$stuId'")->order("parenttime asc")->select();
	        $page = $Page->show();
			// dump($messageResult[0]);exit;
			$this->assign("page",$page);
			$this->assign("message",$messageResult);

			layout(false); // 临时关闭当前模板的布局功能
			$this->display();//加载当前函数的模板文件
		}else{
			$tel = session('tel');
			$teacherModel = M('teacher');
			$teacherResult = $teacherModel->where("tel='$tel'")->select();
			$this->assign('tea',$teacherResult[0]);

			$teacherid = $teacherResult[0]['id'];
			$studentModel = M('student');
			$studentResult = $studentModel->where("teatel='$tel'")->select();
			$this->assign("student",$studentResult);
			layout(false); // 临时关闭当前模板的布局功能
			$this->display();//加载当前函数的模板文件
		}
	}
	public function stuMessage(){
		// 获取学生id
		$studentModel = M('student');
		$studentResult = $studentModel->where("realname='$stuName'")->select();
		$stuId = $studentResult[0]['id'];
		// 获取老师与该学生的消息记录
		$messageModel = M('messageBoard');

		$count  = $messageModel->count();    //计算总数
        $Page   = new \Think\Page($count, 1);
		$messageResult = $messageModel->limit($Page->firstRow. ',' . $Page->listRows)->where("student_id='$stuId'")->order("parenttime asc")->select();
        $page = $Page->show();
		dump($messageResult[0]);exit;
		$this->assign("page",$page);
		$this->assign("message",$messageResult);
	}

	public function addMessage(){
		if(!IS_POST){
			exit("bad request");
		}
		$stuName = I("post.realname");
		if($stuName =="请选择学生"){
			echo "<script>";
			echo "alert('请选择接收消息的学生！')";
			echo "</script>";
		}
		
		// 获取学生id
		$studentModel = M('student');
		$studentResult = $studentModel->where("realname='$stuName'")->select();
		$stuId = $studentResult[0]['id'];

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function myClass(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function personCenter(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function resource(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function update(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		
		if (IS_POST) {
    		$teacherModel = M("teacher");
    		if($teacherModel->create()){
    			$result = $teacherModel->save();
				if($result !== false){
					$this->redirect('teacher/personCenter');
				}else{
					$this->error($teacherModel->getError());
				}
    		}
    	}
    	else {
    		$teacherResult = $teacherModel->where("tel='$tel'")->select();
			$this->assign('tea',$teacherResult[0]);

    		layout(false); // 临时关闭当前模板的布局功能
			$this->display();//加载当前函数的模板文件
    	}
		
	}
	public function upload(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function workpaper(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}

}
?>