<?php
namespace Admin\Controller;
use Think\Controller;
class TController extends Controller {
	public function __construct(){
    	parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("A/login"));
		}
    }
    
    public function lists(){
  		$userModel = D("user");
  		// dump($userModel->select());exit;
		//页码
		$count  = $userModel->count();    //计算总数
		$Page   = new \Think\Page($count, 3);
		$users   = $userModel->limit($Page->firstRow. ',' . $Page->listRows)->order('teacher_id desc')->relation(true)->select();
		// dump($users);exit;
		$page = $Page->show();
		$this->assign("page",$page);
		$this->assign("user",$users);
    	
        $this->show();
    }
    
    public function edit($id=''){
    	// dump(I("post.subject"));exit;
		if (IS_POST) {
    		$model = D("User");
    		if($model->create()){
				$data['name'] = I("post.name");
    			$data['teacher_id'] = I("post.teacher_id");
				$data['grade'] = I("post.grade");
				$data['location'] = I("post.location");
				$data['teacher'] = array(
						'subject' => I("post.subject")
					);
    			$result = $model->relation(true)->where(array('teacher_id'=>$id))->save($data);
    		// dump($result);exit;
				if($result !== false){
					$this->success("修改成功", U("T/lists"));
				}else{
					$this->error($model->getError());
				}
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$userInfo = D("user")->relation(true)->where("teacher_id=%d",$id)->select();
    		// dump($userInfo);exit;
    		$this->assign("user", $userInfo);
    		$this->display();
    	}
	}
	
	public function del() {
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("user")->delete($id)){
			$this->success("删除成功！");
		}
    }
}