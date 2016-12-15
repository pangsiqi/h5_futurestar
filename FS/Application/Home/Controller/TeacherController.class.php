<?php
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isTeaLogin()){
			$this->redirect("index/login");
		}
	}
	public function index(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		$homeworkModel = M('homework');
        $data = $homeworkModel->limit("5")->join('student ON homework.student_id = student.id')->select();
        $this->assign('homework',$data);

		$studentModel = M("student");
		$condition = array(
					"teatel" => $tel,
					"finishtask" => 1
				);
		$stuFinish = $studentModel->where($condition)->select();
		$this->assign("stuFinish",$stuFinish);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function studentinfo($id=""){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		$studentModel = M('student');
		$studentResult = $studentModel->where("id='$id'")->select();
		$this->assign('stu',$studentResult[0]);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}

	public function changestuinfo($id=""){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);
		$studentModel = M("student");
		if (IS_POST) {
			$data = array(
						'id' => I("post.id"),
						'sex' => I("post.sex"),
						'realname' => I("post.realname"),
						'username' => I("post.realname"),
						'birthday' => I("post.birthday"), 
						'school' => I("post.school"),
						'grade' => I("post.grade")
					);
    		if(!$studentModel->create($data)){
	            $this->error($studentModel->getError());
	        }
            if($studentModel->where("id='$id'")->save($data)){
                $this->redirect("Home/teacher/studentinfo/id/$id");
            }else{
                $this->error("修改失败");
            }
    	}else {
    		$studentResult = $studentModel->where("id='$id'")->select();
			$this->assign('stu',$studentResult[0]);

    		layout(false); // 临时关闭当前模板的布局功能
			$this->display();//加载当前函数的模板文件
    	}
	}

	public function assignment(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		$subjectModel = M("subject");
		$subjectResult = $subjectModel->limit("6")->where("type='英语印象'")->select();
		$this->assign("subject",$subjectResult);

		$resourceModel = M("resource");
		$resourceResult = $resourceModel->limit("6")->select();
		$this->assign("resource",$resourceResult);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function addSubject(){
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if ($id == '') {
            exit("bad param!");
        }
        // 获取subject内容
        $subjectModel = M("subject");
		$subjectResult = $subjectModel->where("id='$id'")->select();
		// 赋值
		$title = $subjectResult[0]['title'];
		$type = $subjectResult[0]['type'];
		$summary = $subjectResult[0]['summary'];
		$path = $subjectResult[0]['href'];
		// 将数据存到homework表中
		$homeworkModel = M("homework");
		$data = array(
					"teacher_id" => session("tel"),
					"title" => $title,
					"subject" => $type,
					"detail" => $summary,
					"path" => $path,
					"starttime" => date("Y-m-d H:m"),
					"endtime" => date("Y-m-d H:m",strtotime("+3 days"))
				);
		if(!$homeworkModel->create($data)){
            $this->error($homeworkModel->getError());
        }
        if($homeworkModel->add($data)){
			$this->redirect("teacher/assignment");
		}else{
			$this->error("添加失败",1);
		}
	}
	public function addResource(){
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if ($id == '') {
            exit("bad param!");
        }
        // 获取subject内容
        $resourceModel = M("resource");
		$resourceResult = $resourceModel->where("id='$id'")->select();
		// 赋值
		$title = $resourceResult[0]['title'];
		$summary = $resourceResult[0]['summary'];
		$path = $resourceResult[0]['path'];
		
		// 将数据存到homework表中
		$homeworkModel = M("homework");
		$data = array(
					"title" => $title,
					"subject" => $title,
					"detail" => $summary,
					"starttime" => date("Y-m-d H:m"),
					"endtime" => date("Y-m-d H:m",strtotime("+3 days")),
					"subjectid" => "5",
					"path" => $path
				);
		if(!$homeworkModel->create($data)){
            $this->error($homeworkModel->getError());
        }
        if($homeworkModel->add($data)){
			$this->redirect("teacher/assignment");
		}else{
			$this->error("添加失败",1);
		}
	}

	public function checkhomework(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		$studentModel = M("student");
    	$studentResult = $studentModel->limit("7")->where("teatel='$tel'")->select();
    	// dump($studentResult);exit;
    	$this->assign("student",$studentResult);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function guestbook(){
		
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
	public function showMessage(){
		$stuName = I("post.stuName");
		// echo $stuName;exit;
		// if($stuName=="请选择学生"){
		// 	echo "请选择学生";
		// }
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
        // dump($messageResult);exit;
        $jsonData = json_encode($messageResult);
        // echo $page;
      	echo $jsonData;
        // echo $messageResult;
		$this->assign("page",$page);
        $this->assign("message",$messageResult);
	}

	// public function stuMessage(){
	// 	// 获取学生id
	// 	$studentModel = M('student');
	// 	$studentResult = $studentModel->where("realname='$stuName'")->select();
	// 	$stuId = $studentResult[0]['id'];
	// 	// 获取老师与该学生的消息记录
	// 	$messageModel = M('messageBoard');

	// 	$count  = $messageModel->count();    //计算总数
 //        $Page   = new \Think\Page($count, 1);
	// 	$messageResult = $messageModel->limit($Page->firstRow. ',' . $Page->listRows)->where("student_id='$stuId'")->order("parenttime asc")->select();
 //        $page = $Page->show();
	// 	dump($messageResult[0]);exit;
	// 	$this->assign("page",$page);
	// 	$this->assign("message",$messageResult);
	// }

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

		$studentModel = M("student");
		$studentResult = $studentModel->where("teatel='$tel'")->select();
		$this->assign("student",$studentResult);
		
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

		$resourceModel = M('resource');
        $data = $resourceModel->select();
        $this->assign('resource',$data);

		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function update(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		
		if (IS_POST) {
    		if(!$teacherModel->create()){
	            $this->error($teacherModel->getError());
	        }
	        $upload = new \Think\Upload();// 实例化上传类
	        $upload->maxSize  = 3145728 ;// 设置附件上传大小
	        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	        $upload->rootPath = './Public';
	        $upload->savePath =  '/uploads/teacher';// 设置附件上传目录    
	        $uploadPic = $upload->upload(); 
	        if(!$uploadPic) {// 上传错误提示错误信息
	            $this->error($upload->getError());
	        }else{
	        	$id = I("post.id");
	        	$data['realname'] = I("post.realname");
	        	$data['username'] = I("post.realname");
	            $data['thumb'] = __ROOT__.'/Public'.$uploadPic['thumb']['savepath'].$uploadPic['thumb']['savename'];
	            $data['sex'] = I("post.sex");
	            // dump($data);exit;
	            if($teacherModel->where("id='$id'")->save($data)){
	                $this->redirect("teacher/personCenter");
	            }else{
	                $this->error("修改失败");
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
	public function resourceAdd(){
        if(!IS_POST){
            exit("bad request");
        }
        
        $resourcesModel = D("resource");
        if(!$resourcesModel->create()){
            $this->error($resourcesModel->getError());
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('doc','docx','swf');// 设置附件上传类型
        $upload->rootPath = './Public';
        $upload->savePath =  '/uploads/';// 设置附件上传目录    
        $uploadPic = $upload->upload(); 
        if(!$uploadPic) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{                  
            $data['title'] = I("post.title");
            $data['path'] = __ROOT__.'/Public'.$uploadPic['path']['savepath'].$uploadPic['path']['savename'];
            $data['author'] = I("post.author");
            $data['publishTime'] = I("post.publishTime");
            $data['summary'] = I("post.summary");
            if($resourcesModel->add($data)){
                $this->redirect("teacher/resource");
            }else{
                $this->error("添加失败");
            }
        }
    }

	public function workpaper(){
		$tel = session('tel');
		$teacherModel = M('teacher');
		$teacherResult = $teacherModel->where("tel='$tel'")->select();
		$this->assign('tea',$teacherResult[0]);

		$homeworkModel = M("homework");
		$homeworkResult = $homeworkModel->limit("1")->select();
		$this->assign('homework',$homeworkResult[0]);
		// dump($homeworkResult);exit;
		layout(false); // 临时关闭当前模板的布局功能
		$this->display();//加载当前函数的模板文件
	}
	public function logout(){
		if(!session(null)){
			$this->redirect("Index/index");
		}
	}
}
?>