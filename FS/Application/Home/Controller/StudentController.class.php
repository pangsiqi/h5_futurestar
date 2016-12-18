<?php
namespace Home\Controller;
use Think\Controller;
class StudentController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isStuLogin()){
			$this->redirect("index/login");
		}
	}
	public function index(){
		//获取榜单信息
		$studentModel = M("student");
		$student = $studentModel->limit("3")->order("starnum desc")->select();
		$this->assign("stu",$student);

		//获取我的信息
		$tel = session('tel');
		$currentUser = $studentModel->where("tel=".$tel)->select();
		$this->assign("current",$currentUser[0]);

		// 获取学习资源
		$homeworkModel = M("homework");
		$homeworks = $homeworkModel->limit("3")->order("homeworkid desc")->select();
		$this->assign("homework",$homeworks);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function changeinform(){
		if (IS_POST) {
    		$studentModel = M("student");

    		if(!$studentModel->create()){
	            $this->error($studentModel->getError());
	        }
	        $upload = new \Think\Upload();// 实例化上传类
	        $upload->maxSize  = 3145728 ;// 设置附件上传大小
	        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	        $upload->rootPath = './Public';
	        $upload->savePath =  '/uploads/';// 设置附件上传目录    
	        $uploadPic = $upload->upload(); 
	        if(!$uploadPic) {// 上传错误提示错误信息
	            $this->error($upload->getError());
	        }else{
	        	$id = I("post.id");
	        	$data['realname'] = I("post.realname");
	        	$data['username'] = I("post.realname");
	            $data['thumb'] = __ROOT__.'/Public'.$uploadPic['thumb']['savepath'].$uploadPic['thumb']['savename'];
	            $data['birthday'] = I("post.birthday");
	            if($studentModel->where("id='$id'")->save($data)){
	                $this->success("修改成功",U("student/personcenter"));
	            }else{
	                $this->error("修改失败");
	            }
	        }
    	}
    	else {
    		$studentModel = M("student");
    		//获取我的信息
			$tel = session('tel');
			$currentUser = $studentModel->where("tel=".$tel)->select();
			$this->assign("current",$currentUser[0]);
			
    		$studentInfo = D("student")->where("tel=".session('tel'))->select();
    		$this->assign("student", $studentInfo[0]);
    		
    		layout(false); // 临时关闭当前模板的布局功能
			$this->display();//加载当前函数的模板文件
    	}
	}
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
	
	public function gift(){
		$studentModel = M("student");
		//获取我的信息
		$tel = session('tel');
		$currentUser = $studentModel->where("tel=".$tel)->select();
		$this->assign("current",$currentUser[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	
	public function parentspace(){
		$studentModel = M("student");
		$teacherModel = M("teacher");
		//获取我的信息
		$tel = session('tel');
		$currentUser = $studentModel->where("tel=".$tel)->select();
		$this->assign("current",$currentUser[0]);
		//获取教师的ID
		$teatel = cookie("teatel");
		$teaResult = $teacherModel->where("tel=".$teatel)->select();
		$teaId = $teaResult[0]['id'];
		//获取消息
		$messageModel = M("messageBoard");
		$stuId = $currentUser[0]['id'];

		$count  = $messageModel->count();    //计算总数
        $Page   = new \Think\Page($count, 2);
		$messageResult = $messageModel->limit($Page->firstRow. ',' . $Page->listRows)->where("student_id=".$stuId)->order("parenttime desc")->select();
        $page = $Page->show();
		// dump($messageResult);exit;
        $this->assign("page",$page);
		$this->assign('message',$messageResult);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function addMessage(){
		if(!IS_POST){
			exit("bad request");
		}
		$teacherModel = M('teacher');
		$teaResult = $teacherModel->where('tel='.cookie('teatel'))->select();
		
		$studentModel = M('student');
		$stuResult = $studentModel->where('tel='.session('tel'))->select();
		
		$messageModel = M("messageBoard");
		$data['teacher_id'] = $teaResult[0]['id'];
		$data['student_id'] = $stuResult[0]['id'];
		$data['parenttime'] = time();
		$data['parentcontent'] = I("post.message");

		if(!$messageModel->create($data)){
			$this->error($messageModel->getError());
		}
		if($messageModel->add($data)){
			session("tel",I("post.tel"));//session赋值
			$this->redirect("student/parentspace");
		}else{
			$this->error("留言失败");
		}

	}
	public function personcenter(){
		$studentModel = M("student");
		$studentResult = $studentModel->where("tel=".session("tel"))->select();
		// dump($studentResult);exit;
		//获取我的信息
		$tel = session('tel');
		$currentUser = $studentModel->where("tel=".$tel)->select();
		$this->assign("current",$currentUser[0]);

		$this->assign("user",$studentResult[0]);
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}

	public function pk($id=""){
		$studentModel = M("student");
		//获取我的信息
		$tel = session('tel');
		$currentUser = $studentModel->where("tel=".$tel)->select();
		$this->assign("current",$currentUser[0]);
		// 获取当前id的内容
		$id = I("get.id");
		if($id==''){
			$resourceModel = M("resource");
			$resourceResult = $resourceModel->limit("1")->order("id desc")->select();
			$this->assign("resource",$resourceResult[0]);	
		}else{
			$resourceModel = M("resource");
			$resourceResult = $resourceModel->where("id='$id'")->select();
			$this->assign("resource",$resourceResult[0]);
		}
		
		// 获取推荐内容
		$resourcesResult = $resourceModel->limit("5")->order("id desc")->select();
		$this->assign("resources",$resourcesResult);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function studycontent($id=""){
		$studentModel = M("student");
		//获取我的信息
		$tel = session('tel');
		$currentUser = $studentModel->where("tel=".$tel)->select();
		$this->assign("current",$currentUser[0]);
		//获取当前id的内容
		$id = I("get.id");
		$homeworkModel = M("homework");
		$homeworkResult = $homeworkModel->where("homeworkid='$id'")->select();
		$this->assign("homework",$homeworkResult[0]);
		// 获取推荐内容
		$homeworksResult = $homeworkModel->limit("5")->order("homeworkid desc")->select();
		$this->assign("homeworks",$homeworksResult);

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